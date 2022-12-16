<?php

declare(strict_types=1);

class Users extends Database
{
    public function findOne(int $id): array|false
    {
        try
        {
            $stmt = $this->query('SELECT * FROM users WHERE id = :id', ['id' => $id]);
            return $stmt->fetch();
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
            return [];
        }
    }
}