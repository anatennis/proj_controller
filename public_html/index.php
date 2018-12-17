<?php

require_once __DIR__.'/../private/Models/NewsModel.php';
require_once __DIR__.'/../private/Models/TeamgasuModel.php';
require_once __DIR__.'/../private/Base/Controller.php';
require_once __DIR__.'/../private/Controllers/NewsController.php';
require_once __DIR__.'/../private/Controllers/TeamgasuController.php';

echo $_SERVER['REQUEST_URI'];

function run() {
    $controller = "News";
    $action = "news";
    $get = null;
    $routes = explode('/', $_SERVER['REQUEST_URI']);
    //var_dump($routes);
    if ($routes[1]) {
        $controller = $routes[1];
    }
    if ($routes[2]) {
        $action = $routes[2];
    }
    if ($routes[3]) {
        $get = $routes[3];
    }

    $action=strtolower($controller).'Action';
    $controller = ucfirst(strtolower($controller)).'Controller';
    // var_dump("Controller: $controller");


    //var_dump("Action: $action");

    if (!class_exists($controller)) {
        var_dump("Class wasn't found");
        return false;
    }

    $controller = new $controller();

    if (!method_exists($controller, $action)) {
        var_dump("Method wasn't found");
        return false;
    }

    $controller->$action($get);
}
run();