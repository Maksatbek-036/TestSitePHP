<?php

namespace App\Kernel;

use App\Kernel\Http\Request;
use App\Kernel\Router\Router;
use App\Kernel\Container\Container;

class App
{
    private Container $container;   
    public function __construct()
    {
        $this->container = new Container();
    }
    public function run()
    {  
        $this->container
        ->router->dispatch(
            $this->container->request->Uri(),
            $this->container->request->method()
        );
        
        
       
    }
}


