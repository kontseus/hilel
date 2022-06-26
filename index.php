<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once  __DIR__ . '/vendor/autoload.php';

class Contacts{}

interface Builder
{
    public function name(string $name): Builder;
    public function surname(string $surname): Builder;
    public function email(string $email): Builder;
    public function phone(string $phone): Builder;
    public function address(string $address): Builder;
}

class ContactClass implements Builder
{
    private $user;

    public function __construct()
    {
        $this->reset();
    }

    protected function reset(): ContactClass
    {
        $this->user = new Contacts;

        return $this;
    }

    public function name(string $name): Builder
    {
        $this->user->name = $name;

        return $this;
    }
    public function surname(string $surname): Builder
    {
        $this->user->surname = $surname;

        return $this;
    }
    public function email(string $email): Builder
    {
        $this->user->email = $email;

        return $this;
    }
    public function phone(string $phone): Builder
    {
        $this->user->phone = $phone;

        return $this;
    }
    public function address(string $address): Builder
    {
        $this->user->address = $address;

        return $this;
    }

    public function build(): Contacts
    {
        $result = $this->user;
        $this->reset();

        return $result;
    }
}

$contact = new ContactClass();
$newContact = $contact
    ->name('Test')
    ->surname('Surname')
    ->email('email')
    ->phone('phone')
    ->address('address')
    ->build();
echo '<pre>';
var_dump($newContact);
echo '</pre>';
