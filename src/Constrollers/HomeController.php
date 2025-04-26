<?php
namespace App\Controllers;
class HomeController
{
    public function index()
    {
        include_once APP_ROOT . '/views\pages\home.php';
    }
   
}