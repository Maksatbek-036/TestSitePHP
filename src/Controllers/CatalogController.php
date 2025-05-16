<?php

namespace App\Controllers;


use App\Kernel\Controller\Controller;
use App\Models\Product;

class CatalogController extends Controller
{
private Product $product;

    public function index()
    {

        $this->view('catalog');
    }
  
    public function store(){

       
       $this->service()->store(
          $name=  $this->request()->input('name'),
            $this->request()->input('description'),
            $this->request()->file('image'),
            $this->request()->input('price')
           );
        

        
           
dd('Добавлен '.$name);
          
            
            }
    
    public function create(){
        $this->view('admin/catalog');
        
       
    }
    public function service(){
        if (! isset($this->product)){
            $this->product=new Product($this->db());
        }
        return $this->product;
    }

 
}
