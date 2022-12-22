<?php

declare(strict_types=1);

namespace Controllers;

    class Hikes implements Icontrollers
    {

        private \Models\Hikes $hike;

        public function __construct()
        {
            $this->hike = new \Models\Hikes();
        }

        public function startController($function) :void
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
            $datahikes = $this->hike->findFiche();

            include '../views/hikes/cartHike.php';
            include '../views/hikes/listHikes.php';

            return [
                'title' => 'Hikes',
                'content' => $content,
            ];


        }
    }