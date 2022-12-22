<?php

declare(strict_types=1);

namespace Controllers;

    class Hikes implements Icontrollers
    {
        public function startcontroller($function) :void
        {
            $data = $this->$function();
            
            include '../views/template.php';
        }
    
        public function default()
        {
            return $this->list();
        }
    
        public function list()
        {
            $hike = new \Models\Hikes();
            $hikes = $hike->findFiche(quantity:20);

            include '../views/ficheHike.php';
            include '../views/hikes.php';

            return [
                'title' => 'Hikes',
                'content' => $content,
            ];


        }
    }