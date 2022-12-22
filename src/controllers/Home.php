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

    public function startController($function,$arg) :void
    {
        $data = $this->$function($arg);
        include '../views/template.php';
    }

    public function default($arg)
    {
        return $this->display($arg);
    }

    public function display($arg)
    {
        $datahikes = $this->hike->findFiche();

        include '../views/hikes/cartHike.php';

        return [
            'title' => 'Home',
            'content' => $content,
        ];
    }
}