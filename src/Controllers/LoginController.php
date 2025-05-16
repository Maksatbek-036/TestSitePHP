<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;


class LoginController extends Controller
{
    public function index()
    {
        $this->view('login');
    }

    public function login()
    {
       $email=$this->request()->input('email');
       $password=$this->request()->input('password');
   if ($this->auth()->attempt($email,$password)){
    $this->redirect()->to('/');
   }
$this->redirect()->to('/home');
dd($email,$password);

    }
    public function logout(){
        $this->auth()->logout();
        $this->redirect('/login');
    }
}