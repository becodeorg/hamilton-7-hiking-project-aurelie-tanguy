<?php

declare(strict_types=1);

namespace Controllers;

class User implements Icontrollers
{
    public function startcontroller($function) :void
    {
        $data = $this->$function();
        include '../views/template.php';
    }

    public function default()
    {
        return $this->profil();
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