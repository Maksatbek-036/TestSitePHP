<?php
use App\Controllers\Controller;
use App\Kernel\View\View;
namespace App\Controllers;

class RegisterController extends Controller
{
    public function index()
    {
        $this->view('register');
    }
    
}