<?php

namespace App\Router;

class Router
{
  
   public function dispatch(string $uri)
   {
         $routes = $this->getRoutes();
         $routes[$uri]();
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