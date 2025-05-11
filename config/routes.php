<?php

use App\Controllers\AboutController;
use App\Kernel\Router\Route;
use App\Controllers\HomeController;
use App\Controllers\CatalogController;
use App\Controllers\ContactController;
use App\Controllers\OrderController;

return [
   Route::get('/home', [HomeController::class, 'index']),

   Route::get('/test', function () {
      echo 'test';
   }),
   Route::post('/test', function () {
      echo 'test';
   }),
   Route::get('/catalog', [CatalogController::class, 'index']),
   Route::get('/about', [AboutController::class, 'index']),
   Route::get('/order', [OrderController::class, 'index']),
   Route::get('/contacts', [ContactController::class, 'index']),
   Route::get('/admin/catalog/add', [CatalogController::class, 'add']),
   Route::post('/admin/catalog/add', [CatalogController::class, 'store']),


];
