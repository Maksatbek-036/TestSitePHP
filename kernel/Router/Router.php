<?php

namespace App\Kernel\Router;
use App\Kernel\Router\Route;
use App\Kernel\View\View;
use App\Kernel\Controller\Controller;

class Router
{
  private array $routes = [
        'GET' => [],
        'POST' => []
  ];

  private View $view;

  public function __construct(
      View $view
  ){
      $this->view = $view;
      $this->initRoutes();
  }
   public function dispatch(string $uri,string $method)
   {
    $route=$this->findRoute($uri,$method);
        
         
         if (!$route) {
            $this->notFound();
         }


        if (is_array($route->getAction())){
            [$controller,$action] =$route->getAction();

            /** @var Controller $controller */
            $controller = new $controller();
            call_user_func( [$controller,'setView'], $this->view);
    call_user_func([$controller,$action]);
          
           } 
        else{ 
            call_user_func($route->getAction());}
       
    }
   


  private function findRoute(string $uri,string $method): Route|false
   {
    if (!isset($this->routes[$method][$uri])) {
        return false;
    }
       return $this->routes[$method][$uri];
   }

   private function getRoutes()
   {
            return require_once APP_ROOT . '/config/routes.php';
   }

   private function initRoutes()
   {
        $routes = $this->getRoutes();
        foreach ($routes as $route) {
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
        
   }
   private function notFound()
   {
        echo '404 Not Found';
        exit();
   }
  
   
}