<?php

namespace App\Controllers;
use App\Kernel\View\View;
use App\Kernel\Controller\Controller;
class CatalogController extends Controller
{
 

    public function index()
    {
        $view=new View();
        $view->page('catalog');
    }

   
}