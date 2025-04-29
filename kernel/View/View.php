<?php

namespace App\Kernel\View;

class View
{
    public function __construct(){}
    public function page(string $name)
    {
       extract([
'view'=>$this
       ]);
include_once APP_ROOT . '/views/pages/' . $name . '.php';
    }
    public function component(string $name){
        include APP_ROOT . '/views/components/' . $name . '.php';
    }
 
}