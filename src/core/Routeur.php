<?php

declare(strict_types=1);

namespace Core;

class Router
{
    public function root() : void
    {
        $reques = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'); // récupére la page/chemin dans l'url
        [$request,$function,$arg] = explode('/', $reques); // class/methode/argument

        /*
        vérifie si la class existe.
        La class est définie par le chemin dans l'url récupérer plus haut.
        Si la class existe, on l'instancie, sinon on instancie la class Home
        */
        if($request == null || $request == '' || !class_exists('\Controllers\\'.ucfirst($request)))
        {
            $controller = '\Controllers\Home';
        }
        else
        {
            $controller = '\Controllers\\'.ucfirst($request);
        }

        if($function == null || $function == '' || !method_exists($controller, $function))
        {
            $function = 'default';
        }

        if(isset($arg))
        {
            $arg = $arg;
        }
        else
        {
            $arg = null;
        }

        $instancecontroller = new $controller(); // instancie la class
        // lance la méthode startcontroller de la class instancié. méthode obligatoire pour toutes les class Controller
        $instancecontroller->startController($function, $arg);

    }
}