<?php

namespace App\Controllers;

class MoviesController
{
    public function index()
    {
        include_once APP_ROOT . '/views/pages/movies.php';
    }

    
}