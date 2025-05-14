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
    public function store(){
        $file=$this->request()->file('image');
        
       dd($file->move('catalog','test.png'));

        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:25'],
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $error) {
                $this->session()->set($field, $error);
            }
            $this->redirect()->to('/admin/catalog/add');

            $id = $this->db()->insert('catalog', [
                'name' => $this->request()->input('name')
            ]);
           
            
            }
    }

    public function create(){
        $this->view('admin\createPr');
    }
}
