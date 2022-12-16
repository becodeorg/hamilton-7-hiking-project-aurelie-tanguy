<?php

declare(strict_types=1);

class Home implements Icontrollers
{
    public function startcontroller($method) :void
    {
        switch ($method) {
            case 'GET':
                $this->get(); //varie selon la class
                break;
            case 'POST':
                $this->post(); //varie selon la class
                break;
            default:
                $this->default();
                break;
        }

        include 'views/template.php';
    }

    public function get() // temporary
    {
        echo 'get';
    }

    public function post() // temporary
    {
        echo 'post';
    }

    public function default()
    {
        echo 'default';
    }
}