<?php

    class Hikes implements Icontrollers
    {
        public function startcontroller($function) :void
        {
            $data = $this->$function();
            
            include '../views/template.php';
        }
    
        public function default()
        {
            echo 'default function';
        }
    
        public function list()
        {
            $hike = new Hike();
            $hikes = $hike->findAll();

            include '../views/hikes.php';

            return [
                'title' => 'Hikes',
                'content' => $content,
            ];


        }
    }