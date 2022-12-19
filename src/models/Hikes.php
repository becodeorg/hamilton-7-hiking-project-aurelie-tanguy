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

        public function add(string $name, int $id, float $distance, string $duration, float $elevation_gain, string $description): bool
        {
            try
            {
                $stmt = $this->query('INSERT INTO hikes (name, id, distance, duration, elevation_gain, descirption) 
                VALUES (:name, :id, :datecreation, :distance, :elevation_gain, :description )', [
                    'id' => $id,
                    'name' => $name,
                    'distance' => $distance,
                    'duration' => $duration,
                    'elevation_gain' => $elevation_gain,
                    'description' => $description
                ]);
                return true;
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }
        public function update(int $id, string $name, float $distance, string $duration, float $elevation_gain, string $description): bool
        {
            try
            {
                $stmt = $this->query('UPDATE hikes SET name = :name, id = :id WHERE id = :id', [
                        'id' => $id,
                        'name' => $name,
                        'distance' => $distance,
                        'duration' => $duration,
                        'elevation_gain' => $elevation_gain,
                        'description' => $description
                ]);
                return true;
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }
        public function delete(int $id): bool
        {
            try
            {
                $stmt = $this->query('DELETE FROM hikes WHERE id = :id', ['id' => $id]);
                return true;
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }
    
    }