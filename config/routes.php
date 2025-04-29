<?php
use App\Controllers\AboutController;
use App\Controllers\CardProductController;
use App\Kernel\Router\Route;
use App\Controllers\HomeController;
use App\Controllers\CatalogController;
use App\Controllers\ContactController;
use App\Controllers\OrderController;
use App\Controllers\SupportController;

return[
Route::get('/home',[HomeController::class ,'index']),

Route::get('/test',function(){
   echo 'test';}),
Route::post('/test',function(){
   echo 'test';}),
   Route::get('/catalog',[CatalogController::class ,'index']),
   Route::get('/about',[AboutController::class ,'index']),
  Route::get('/order',[OrderController::class ,'index']),
  Route::get('/contacts',[ContactController::class ,'index']),
   Route::get('/support',[SupportController::class ,'index']),
   Route::post('/support',[SupportController::class ,'index']),
   Route::get('/products/cardproduct',[CardProductController::class ,'index']),

];