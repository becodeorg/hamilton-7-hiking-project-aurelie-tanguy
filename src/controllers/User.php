<?php

declare(strict_types=1);

namespace Controllers;

class User implements Icontrollers
{

    private \Models\User $user;

    public function __construct()
    {
        $this->user = new \Models\User();
    }

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
        $data = $this->user->findOne($_SESSION['user']['id']);

        include '../views/user/dashbord.php';

        return [
            'title' => 'Profil',
            'content' => $content,
        ];
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