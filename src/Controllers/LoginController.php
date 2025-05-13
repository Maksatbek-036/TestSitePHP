<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;
use App\Services\AuthService;

class LoginController extends Controller
{
    public function index()
    {
        $this->view('login');
    }

    public function authenticate()
    {
       $email=$this->request()->input('email');
       $password=$this->request()->input('password');
      dd($this->auth()->attempt($email,$password));
    }
}