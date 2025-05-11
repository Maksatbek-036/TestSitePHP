<?php

namespace App\Controllers;
use App\Kernel\View\View;
use App\Kernel\Controller\Controller;
use App\Kernel\Validator\Validator;

class CatalogController extends Controller
{
 

    public function index()
    {
        $view=new View();
        $view->page('catalog');
    }
public function add(){
$view=new View();
    $view->page('admin/add');
}
public function store(){

$data=[
    'name'=>""
];
 $rules=[
    'name'=>'required','min:3','max:20',];

$validator=new Validator();
dd($validator->validate($data,$rules));
}
}