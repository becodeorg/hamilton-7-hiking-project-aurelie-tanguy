<?php

declare(strict_types=1);

    class HikesModel extends Database
    {
        public function findAll(): array|false
        {
            try
            {
                $stmt = $this->query('SELECT * FROM hikes');
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
        public function add(string $name, string $distance, string $duration, string $elevation_gain, string $description): bool
        {
            try
            {
                $stmt = $this->query('INSERT INTO hikes(name, distance, duration, elevation_gain, description) 
                VALUES (:name, :distance, :duration, :elevation_gain, :description)', [
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
        public function update(string $name, string $distance, string $duration, string $elevation_gain, string $description): bool
        {
            try
            {
                $stmt = $this->query('UPDATE hikes SET name = :name, distance = :distance, duration = :duration,
                    elevation_gain = :elevation_gain, description = :description', [
                        'name' => $name,
                        'distance' => $distance,
                        'duration' => $duration,
                        'elevation_gain' => $elevation_gain,
                        'description' => $description
                // :elevation_gain au lieu de ?elevation_gain permet d'accéder au valeur dans le désordre
                //ex: si elevation_gain est en 4e position de la liste et que sa valeur est appelée en 2e position    
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