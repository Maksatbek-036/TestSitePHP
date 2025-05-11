<?php

namespace App\Kernel\View;

use App\Kernel\Session\SessionInterface;
use App\Kernel\View\ViewInterface;


class View implements ViewInterface
{
    public function __construct(
        private SessionInterface $session,
    ) {}
    public function page(string $name)
    {
extract($this->defaultData());
        include_once APP_ROOT . '/views/pages/' . $name . '.php';
    }
    public function component(string $name)
    {

        include_once APP_ROOT . '/views/components/' . $name . '.php';
    }

    private function defaultData()
    {
       return [
           
        
            'view' => $this,
            'session' => $this->session];
    }
}
