<?php

namespace App\Models;

use App\Kernel\DataBase\DataBaseInterface;
use App\Kernel\Upload\UploadedFileInterface;

class ProductService
{
  

    public function __construct(
         private DataBaseInterface $db
    )
    {
      
    }

   public function store(string $name, $description, UploadedFileInterface $image, int $price){
$filePath=$image->move('image');
    $id=$this->db->insert('products',[
        'name'=>$name,
        'price'=>$price,
        'description'=>$description,
        'image'=>$filePath

    ]);
    return $id;
   }
  public function all() : array {
    $products = $this->db->get('products'); 

    return array_map(function($products) {
        return new Product(
            $products['name'],
            $products['price'],
            $products['description'],
            $products['image']
        );
    }, $products);
}
}


   
