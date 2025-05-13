<?php

namespace App\Kernel\Controller;

use App\Kernel\Auth\AuthInterface;
use App\Kernel\DataBase\DataBaseInterface;
use App\Kernel\Http\RedirectInterface;

use App\Kernel\Http\RequestInterface;

use App\Kernel\View\ViewInterface;
use App\Kernel\Session\SessionInterface;


abstract class Controller
{
    private ViewInterface    $view;

    private RequestInterface $request;

    private RedirectInterface $redirect;

    private SessionInterface $session;

    private DataBaseInterface $db;

    private AuthInterface $auth;


    public function view(string $name): void
    {
        $this->view->page($name);
    }
    public function setView(ViewInterface $view): void
    {
        $this->view = $view;
    }
    public function setRequest(RequestInterface $request): void
    {
        $this->request = $request;
    }
    public function request(): RequestInterface
    {
        return $this->request;
    }

    public function setRedirect(RedirectInterface $redirect): void
    {
        $this->redirect = $redirect;
    }
    public function redirect(): RedirectInterface
    {
        return $this->redirect;
    }
    public function setSession(SessionInterface $session): void
    {
        $this->session = $session;
    }
    public function session(): SessionInterface
    {
        return $this->session;
    }
    public function setDb(DataBaseInterface $db): void
    {
        $this->db = $db;
    }
    public function db(): DataBaseInterface
    {
        return $this->db;
    }
    public function setAuth(AuthInterface $auth): void
    {
        $this->auth = $auth;
    }
    public function auth(): AuthInterface
    {
        return $this->auth;
    }
}
