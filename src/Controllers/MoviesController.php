<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class MoviesController extends Controller
{
    public function index()
    {
        include_once APP_ROOT . '/views/pages/movies.php';
    }

    
}