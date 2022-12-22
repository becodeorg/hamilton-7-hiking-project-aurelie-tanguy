<?php

declare(strict_types=1);

namespace Models;

    class Hikes extends \Core\Database
    {
        public function findOne(int $id): array|false
        {
            try
            {
                $stmt = $this->query('SELECT * FROM hikes join Users on ( hikes.id_creator = Users.id) WHERE hikes.id = :id', ['id' => $id]);
                return $stmt->fetch();
            }
            catch (\PDOException $e)
            {
                echo $e->getMessage();
                return [];
            }
        }

        public function findTags(string $search_tag): array|false
        {
            $sql = 'SELECT * 
                    FROM tags join hikes_tag on ( tags.id = hikes_tag.id_tag) 
                                join hikes on (hikes_tag.id_hikes = hikes.id) 
                    WHERE tags.name = :search_tag';
            try
            {
                $stmt = $this->query($sql, ['search_tag' => $search_tag]);
                return $stmt->fetchAll();
            }
            catch (\PDOException $e)
            {
                echo $e->getMessage();
                return [];
            }
        }

        public function findFiche(string $orderQ = "datecreation", int $quantity = 3): array|false
        {
            $sql = "SELECT hikes.id as id,name,distance,duration,description,id_creator,Users.nickname as user FROM hikes join Users on (hikes.id_creator = Users.id) ORDER BY $orderQ DESC LIMIT $quantity";
            try
            {
                $stmt = $this->query($sql);
                return $stmt->fetchAll();
            }
            catch (\PDOException $e)
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
            catch (\PDOException $e)
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
                $stmt = $this->query('DELETE FROM hikes WHERE id = :id', ['id' => $id]);
                return true;
            }
            catch (\PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }
    }