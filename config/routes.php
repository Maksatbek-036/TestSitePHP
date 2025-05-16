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
use App\Middleware\GuestMiddleware;

return [
   Route::get('/home', [HomeController::class, 'index']),

 
  
   Route::get('/about', [AboutController::class, 'index']),
   Route::get('/order', [OrderController::class, 'index']),
   Route::get('/contacts', [ContactController::class, 'index']),


   Route::get('/admin/add',[CatalogController::class,'create']),
   
   Route::post('/admin/add',[CatalogController::class,'store']),


   Route::get('/catalog',[CatalogController::class,'index']),
  
   
 
 
   
   Route::get('/register', [RegisterController::class, 'index']),
   Route::post('/register', [RegisterController::class, 'register']),
   




];
