<?php

namespace App\Controllers;


use App\Kernel\Controller\Controller;
use App\Models\Product;
use App\Models\ProductService;

class CatalogController extends Controller
{
private ProductService $product;

    public function index()
    {
$product=$this->service();


       $this->view('catalog',[
            'products'=>$product->all(),
        ]);
       
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
            $this->product=new ProductService($this->db());
        }
        return $this->product;
    }

 
}
