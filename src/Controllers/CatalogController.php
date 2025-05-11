<?php

namespace App\Controllers;

use App\Kernel\View\View;
use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;
use App\Kernel\Validator\Validator;

class CatalogController extends Controller
{


    public function index()
    {
    
        $this->view('catalog');
    }
    public function add()
    {
      
        $this->view('admin/add');
    }
    public function store()
    {

        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:25'],
        ]);

        if (! $validation) {
foreach ($this->request()->errors() as $field => $error) {
                $this->session()->set($field, $error);
            }
            $this->redirect()->to('/admin/catalog/add');

            dd('validation failed', $this->request()->errors());
        }
    }
}
