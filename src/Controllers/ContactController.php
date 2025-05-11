<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;
use App\Kernel\View\View;

class ContactController extends Controller
{
    public function index()
    {
    
     $this->view('contacts');
    }
}