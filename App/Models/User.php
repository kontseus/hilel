<?php

namespace App\Models;


use Exception;

class User
{

    private int $id;
    private string $password;

    public function __construct($id, $password)
    {

        if (!is_numeric($id)) {
            throw new Exception("\n ID should be integer");
        }
        if (strlen($password) > 8) {
            throw new Exception("\n Password should be not longer than 8 symbols");
        }
        $this->id = $id;
        $this->password = $password;
    }

    public function getUserData()
    {
        return 'ID is ' . $this->getId() . ' and password is ' .  $this->getPassword() . '.';
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getPassword(): string
    {
        return $this->password;
    }

}

/*
    Создайте класс User с полями id (должно содержать только число) и password (длина поля должна быть

    не более 8 символов) и методом getUserData, который возвращает id и email. Обработайте исключения,

    когда id содержит не число и password содержит более 8 символов, при этом выведите сообщение

    исключения, файл в котором данное исключение возникло и номер строки.
*/
