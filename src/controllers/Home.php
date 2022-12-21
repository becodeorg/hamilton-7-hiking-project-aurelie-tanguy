<?php

declare(strict_types=1);

class Home implements Icontrollers
{
    public function startcontroller($function) :void
    {
        $data = $this->$function();
        include '../views/template.php';
    }

    public function default()
    {
        $hike = new Hike();
        $hikes = $hike->findFiche();

        include '../views/ficheHike.php';

        return [
            'title' => 'Home',
            'content' => $content,
        ];
    }
}