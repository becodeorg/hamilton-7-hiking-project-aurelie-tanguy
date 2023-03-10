<?php

declare(strict_types=1);

namespace Models;

class User extends \Core\Database
{
    public function findOne(int $id): array|false
    {
        try
        {
            $stmt = $this->query('SELECT * FROM users WHERE id = :id', ['id' => $id]);
            return $stmt->fetch();
        }
        catch (\PDOException $e)
        {
            echo $e->getMessage();
            return [];
        }
    }

    public function update(int $id, string $firstname, string $lastname, string $nickname, string $email, string $password): bool
    {
        try
        {
            $stmt = $this->query('UPDATE users SET firstname = :firstname, lastname = :lastname, nickname = :nickname,
                email = :email, password = :password WHERE id = :id', [
                    'id' => $id,
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

    public function delete(int $id): bool
    {
        try
        {
            $stmt = $this->query('DELETE FROM users WHERE id = :id', ['id' => $id]);
            return true;
        }
        catch (\PDOException $e)
        {
            echo $e->getMessage();
            return false;
        }
    }

    
}