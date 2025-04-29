<?php

namespace App\Controllers;

use App\Kernel\View\View;
use App\Kernel\Controller\Controller;

class CardProductController extends Controller
{
    public function index()
    {
        $view =new View();
        $view->page('product_card');
    }

    public function show($id)
    {
        // Code to show a single card product by ID
    }

    public function create()
    {
        // Code to show form for creating a new card product
    }

    public function store()
    {
        // Code to save a new card product
    }

    public function edit($id)
    {
        // Code to show form for editing a card product
    }

    public function update($id)
    {
        // Code to update a card product
    }

    public function destroy($id)
    {
        // Code to delete a card product
    }
}