<?php

namespace App\Kernel\View;

use App\Kernel\Auth\AuthInterface;
use App\Kernel\Session\SessionInterface;
use APP\Kernel\Storage\Storage;
use App\Kernel\Storage\StorageInterface;
use App\Kernel\View\ViewInterface;


class View implements ViewInterface
{
    public function __construct(
        private SessionInterface $session,
        private AuthInterface $auth,
        private StorageInterface $storage
    ) {}
    public function page(string $name)
    {
extract($this->defaultData());
        include_once APP_ROOT . '/views/pages/' . $name . '.php';
    }
    public function component(string $name)
    {
extract($this->defaultData());
        include_once APP_ROOT . '/views/components/' . $name . '.php';


    }

    private function defaultData()
    {
       return [
           
        
            'view' => $this,
            'session' => $this->session,
            'auth'=>$this->auth,
            'storage'=>$this->storage
            
            ];
    }
}
