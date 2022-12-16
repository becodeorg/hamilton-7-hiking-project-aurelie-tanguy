<?php

declare(strict_types=1);

    class Hikes extends Database
    {
        public function findAll(): array|false
        {
            try
            {
                $stmt = $this->query('SELECT * FROM tmp');
                return $stmt->fetchAll();
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
                return [];
            }
        }

        public function findOne(int $id): array|false
        {
            try
            {
                $stmt = $this->query('SELECT * FROM tmp WHERE id = :id', ['id' => $id]);
                return $stmt->fetch();
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
                return [];
            }
        }
    }