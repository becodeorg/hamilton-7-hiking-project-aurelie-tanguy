<?php

declare(strict_types=1);

namespace Models;

class Authentication extends \Core\Database
{
    public function register(string $firstname, string $lastname, string $nickname, string $email, string $password): bool
    {
        try
        {
            $stmt = $this->query('INSERT INTO users (firstname, lastname, nickname, email, password) 
            VALUES (:firstname, :lastname, :nickname, :email, :password)', [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'nickname' => $nickname,
                'email' => $email,
                'password' => $password
            ]);
            return true;
        }
        catch (\PDOException $e)
        {
            echo $e->getMessage();
            return false;
        }
    }

    public function login(string $email): array|false
    {
        try
        {
            $stmt = $this->query('SELECT * FROM users WHERE email = :email', [
                'email' => $email
            ]);
            return $stmt->fetch();
        }
        catch (\PDOException $e)
        {
            echo $e->getMessage();
            return [];
        }
    }
}