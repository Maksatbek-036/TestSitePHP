<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;
use App\Kernel\View\View;

class OrderController extends Controller
{
    public function index()
    {
        $this->view('order');
    }
}