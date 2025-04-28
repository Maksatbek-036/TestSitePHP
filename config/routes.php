<?php
use App\Kernel\Router\Route;
use App\Controllers\HomeController;
use App\Controllers\MoviesController;
return[
Route::get('/home',[HomeController::class ,'index']),

Route::get('/movies',[MoviesController::class ,'index']),
Route::get('/test',function(){
   echo 'test';}),
Route::post('/test',function(){
   echo 'test';})
];