<?php

declare(strict_types=1);

namespace Controllers;

interface Icontrollers
{
    public function startController($function,$arg) : void; // start the controller obligation de l'avoir
    public function default($arg); // default function
}