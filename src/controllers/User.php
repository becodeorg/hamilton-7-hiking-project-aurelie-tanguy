<?php

declare(strict_types=1);

namespace Controllers;

class User implements Icontrollers
{

    private \Models\User $user;
    private \Models\Hikes $hike;

    public function __construct()
    {
        $this->user = new \Models\User();
        $this->hike = new \Models\Hikes();
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
        $datauser = $this->user->findOne($_SESSION['user']['id']);

        include '../views/user/profil.php';
        include '../views/user/dashbord.php';

        return [
            'title' => 'Profil',
            'content' => $content,
        ];
    }

    public function myHikes()
    {
        $datahikes = $this->hike->findFicheByUser($_SESSION['user']['id']);
        
        include '../views/user/myHikes.php';
        include '../views/user/dashbord.php';

        return [
            'title' => 'Profil',
            'content' => $content,
        ];
    }

    public function newHike()
    {
        $dataTags = $this->hike->findAllTags();
        
        include '../views/user/newHike.php';
        include '../views/user/dashbord.php';

        return [
            'title' => 'Profil',
            'content' => $content,
        ];
    }

    public function myParticipation()
    {
        $datahikes = $this->hike->findParticipations($_SESSION['user']['id']);
        
        include '../views/user/myWalk.php';
        include '../views/user/dashbord.php';

        return [
            'title' => 'Profil',
            'content' => $content,
        ];
    }

    public function setting()
    {
        include '../views/user/setting.php';
        include '../views/user/dashbord.php';

        return [
            'title' => 'Profil',
            'content' => $content,
        ];
    }

    public function delete()
    {
        echo "you can't delete your account";
        return $this->setting();
    }
}