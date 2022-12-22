<?php

declare(strict_types=1);

namespace Controllers;

class User implements Icontrollers
{
    public function startController($function,$arg) :void
    {
        $data = $this->$function($arg);
        include '../views/template.php';
    }

    public function default($arg)
    {
        return $this->profil($arg);
    }

    public function profil()
    {
        echo "work in progress";
    }

    public function myHikes()
    {
        echo "work in progress";
    }

    public function myParticipation()
    {
        echo "work in progress";
    }
}