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
        echo 'default';
    }
}