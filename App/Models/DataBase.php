<?php

namespace App\Models;

use Exception;
use PDO;
use PDOException;

class DataBase
{

    const HOST      = 'localhost';
    const USER      = 'root';
    const PASS      = 'root';
    const DATABASE  = 'blog';
    const DSN       = 'mysql:host=' . self::HOST . ';dbname=' . self::DATABASE;

    public function __construct()
    {
        try {
            $this->dbConnection = new PDO(
                self::DSN,
                self::USER,
                self::PASS,
            );
        } catch (PDOException $e) {
            die($e);
        }
    }

    public function selectData($id = null, $tableName = 'users')
    {
        $query = "SELECT * FROM $tableName";
        $query .= $id !== null ? ' WHERE id = ' . $id : '';
        $query = $this->dbConnection->prepare($query);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createTableUsers()
    {
        $query = "
            CREATE TABLE users
            (
                id       INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name     VARCHAR(50)  NOT NULL,
                surname  VARCHAR(75)  NOT NULL,
                email    VARCHAR(100) NOT NULL UNIQUE,
                age      INT(50)      NOT NULL
            )";
        $query = $this->dbConnection->prepare($query);
        $query->execute();
    }

    function tableExists($table) {
        try {
            $result = $this->dbConnection->query("SELECT 1 FROM {$table} LIMIT 1");
        } catch (Exception $e) {

            return false;
        }

        return $result !== false;
    }

    public function getColumnsName()
    {
        $query = "
            SELECT `COLUMN_NAME`  as 'column'
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE `TABLE_SCHEMA`='blog' AND 
                  `TABLE_NAME`='users'";
        $query = $this->dbConnection->prepare($query);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertUser(array $user)
    {
        $user = $this->sanitizeData($user);
        $query = 'INSERT INTO users(name, surname, email, age) VALUES(:name, :surname, :email, :age)';

        $statement = $this->dbConnection->prepare($query);

        $statement->bindParam('name', $user['name']);
        $statement->bindParam('surname', $user['surname']);
        $statement->bindParam('email', $user['email']);
        $statement->bindParam('age', $user['age']);

        $statement->execute();
    }

    private function sanitizeData(array $datas): array
    {
        $result = [];
        foreach($datas as $key => $data){
            $result[$key] = htmlspecialchars($data);
        }

        return $result;
    }

    public function delete(array $ids)
    {
        $query = 'DELETE FROM users WHERE id IN (' . implode(', ', $ids) . ')';
        $this->dbConnection->exec($query);
    }
}
