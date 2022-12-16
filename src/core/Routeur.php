<?php

declare(strict_types=1);

class Router
{
    public function root() : void
    {
        $request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'); // récupére la page/chemin dans l'url
        $method = $_SERVER['REQUEST_METHOD']; // récupére la méthode dans l'url (GET, POST, PUT, DELETE) ici seul get et post sont utilisé

        /*
        vérifie si la class existe.
        La class est définie par le chemin dans l'url récupérer plus haut.
        Si la class existe, on l'instancie, sinon on instancie la class Home
        */
        class_exists(ucfirst($request)) ? $controller = ucfirst($request) : $controller = 'Home';

        $instancecontroller = new $controller(); // instancie la class

        // lance la méthode startcontroller de la class instancié. méthode obligatoire pour toutes les class Controller
        $instancecontroller->startcontroller($method);

    }
}