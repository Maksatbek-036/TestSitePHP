<?php

namespace App;
use App\Router\Router;
class App
{
    public function run()
    {  $uri = $_SERVER['REQUEST_URI'];

        $router = new Router();
        $router->dispatch($uri);
    }
}


