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

        public function startController($function,$arg) :void
        {
            $data = $this->$function($arg);
            
            include '../views/template.php';
        }
    
        public function default($arg)
        {
            return $this->list($arg);
        }
    
        public function list($arg)
        {   
            if (isset($_GET["search_tag"])) 
            {
                $datahikes = $this->hike ->findTags($_GET["search_tag"]);
            }
            else 
            {
                $datahikes = $this->hike->findFiche(quantity:20);
            }
    
            include '../views/hikes/cartHike.php';
            include '../views/hikes/listHikes.php';

            return [
                'title' => 'Hikes',
                'content' => $content,
            ];
        }

        public function fiche($arg)
        {
            $datahike = $this->hike->findOne(intval($arg));

            include '../views/hikes/hike.php';

            return [
                'title' => 'Hikes',
                'content' => $content,
            ];
        }
    }