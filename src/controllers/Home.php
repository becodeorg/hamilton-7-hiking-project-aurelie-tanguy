<?php

declare(strict_types=1);

namespace Controllers;

class Home implements Icontrollers
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
        return $this->display();
    }

    public function display()
    {
        $datahikes = $this->hike->findFiche();

        include '../views/ficheHike.php';

        return [
            'title' => 'Home',
            'content' => $content,
        ];
    }
}