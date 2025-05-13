<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;


class RegisterController extends Controller
{
    public function index()
    {
        $this->view('register');
    }
    public function register()
    {
        $validation = $this->request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'max:20'],
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $error) {
                $this->session()->set($field, $error);
            }
            $this->redirect()->to('/register');
        }
        
        $id= $this->db()->insert('users', [
            'email' => $email=$this->request()->input('email'),
            'password' => $this->request()->input('password'),
        ]);
      
        
        dd('User created with ID: '.$id);
    }
}
