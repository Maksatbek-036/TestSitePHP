<?php

namespace App\Router;

class Router
{
    private array $routes = [
        'GET' => [],
        'POST' => []
    ];
    public function __construct()
    {
        $this->initRoutes();
        dd($this->routes);
    }
   public function dispatch(string $uri,string $method)
   {
         $routes = $this->getRoutes();
         $routes[$uri][$method]();
   }
  
   private function getRoutes()
   {
            return require_once APP_ROOT . '/config/routes.php';
   }
   private function initRoutes()
   {
       $routes = $this->getRoutes();
       foreach($routes as $route)
       {
           $this->routes[$route->getMethod()][$route->getUri()] = $route->getAction();
       }
   }
}