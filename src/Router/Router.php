<?php

namespace App\Router;

class Router
{
   public function dispatch()
   {
         $routes = $this->getRoutes();
         $uri = $_SERVER['REQUEST_URI'];
         $routes[$uri]();
   }
   private function getRoutes()
   {
            return require_once APP_ROOT . '/config/routes.php';
   }
}