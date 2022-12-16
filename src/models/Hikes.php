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
                $stmt = $this->query('SELECT * FROM hikes join users on ( hikes.createur = users.id) WHERE hikes.id = :id', ['id' => $id]);
                return $stmt->fetch();
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
                return [];
            }
        }

        public function findTags(int $id): array|false
        {
            try
            {
                $stmt = $this->query('SELECT * FROM tags join hikes_tags on ( tags.id = hikes_tags.tag_id) WHERE hikes_tags.hike_id = :id', ['id' => $id]);
                return $stmt->fetchAll();
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
                return [];
            }
        }
    }