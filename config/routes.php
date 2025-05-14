<?php

use App\Controllers\AboutController;
use App\Kernel\Router\Route;
use App\Controllers\HomeController;
use App\Controllers\CatalogController;
use App\Controllers\LoginController;
use App\Controllers\ContactController;
use App\Controllers\OrderController;
use App\Controllers\RegisterController;
use App\Middleware\AuthMiddleware;



return [
   Route::get('/home', [HomeController::class, 'index']),

   Route::get('/test', function () {
      echo 'test';
   }),
  
   Route::get('/about', [AboutController::class, 'index']),
   Route::get('/order', [OrderController::class, 'index']),
   Route::get('/contacts', [ContactController::class, 'index']),
   
   Route::get('/admin/catalog/add', [CatalogController::class, 'add'],[AuthMiddleware::class]),
   Route::get('/catalog', [CatalogController::class, 'index']),
   Route::post('/admin/catalog/add', [CatalogController::class, 'store']),
   
   Route::get('/login', [LoginController::class, 'index']),
   Route::post('/login', [LoginController::class, 'login']),
   Route::get('admin/add',[CatalogController::class,'create']),
   Route::post('/logout',[LoginController::class,'login'],),
   
   Route::get('/register', [RegisterController::class, 'index']),
   Route::post('/register', [RegisterController::class, 'register']),


];
