<?php

declare(strict_types=1);

class Home implements Icontrollers
{
    public function startcontroller($function) :void
    {
        $this->$function();
        include 'views/home.php';
        include 'views/template.php';
    }

    public function default()
    {
        echo 'default';
    }
}