<?php

namespace App\Kernel\Router;

use App\Kernel\Router\Route;
use App\Kernel\View\ViewInterface;
use App\Kernel\Http\RequestInterface;
use App\Kernel\Http\RedirectInterface;
use App\Kernel\Session\SessionInterface;
use App\Kernel\DataBase\DataBaseInterface;
use App\Kernel\Auth\AuthInterface;

class Router implements RouterInterface
{
    private array $routes = [
        'GET' => [],
        'POST' => []
    ];


    public function __construct(
        private ViewInterface $view,
        private RequestInterface $request,
        private RedirectInterface $redirect,
        private SessionInterface $session,
        private DatabaseInterface $db,
        private AuthInterface $auth,
    ) {
        $this->view = $view;
        $this->initRoutes();
    }
    public function dispatch(string $uri, string $method)
    {
        $route = $this->findRoute($uri, $method);


        if (!$route) {
            $this->notFound();
        }

if($route->hasMiddleware()){
foreach ($route->getMiddlewares() as $middleware ){
    /** @var AbsractMiddleware $middleware */
$middleware=new $middleware($this->request,$this->auth,$this->redirect);
$middleware->handle();
}
}


        if (is_array($route->getAction())) {
            [$controller, $action] = $route->getAction();

            /** @var Controller $controller */
            $controller = new $controller();
            call_user_func([$controller, 'setView'], $this->view);
            call_user_func([$controller, 'setRequest'], $this->request);
            call_user_func([$controller, 'setRedirect'], $this->redirect);
            call_user_func([$controller, 'setSession'], $this->session);
            call_user_func([$controller, 'setDb'], $this->db);
            call_user_func([$controller, 'setAuth'], $this->auth);
            call_user_func([$controller, $action]);
        } else {
            call_user_func($route->getAction());
        }
    }



    private function findRoute(string $uri, string $method): Route|false
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
