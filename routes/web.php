<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\Login;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
   return view('login');
}); 


Route::post('logged', function () {
  return 'You Are Logged in'; 
})->name('logged');

//Route::post('control', [ExampleController::class, 'store']); 

// Created Cars

Route::get('createCar', [CarController::class, 'create']); 

Route::post('storeCar', [CarController::class, 'store'])->name('storeCar'); 

Route::get('cars', [CarController::class, 'index']);

Route::get('updateCar/{id}', [CarController::class, 'edit']);

Route::put('updCar/{id}', [CarController::class, 'update'])->name('updateCar');

Route::get('showCar/{id}', [CarController::class, 'show'])->name('showCar');

Route::get('deleteCar/{id}', [CarController::class, 'destroy']);

Route::get('trashed', [CarController::class, 'trashed'])->name('trashed');

// Created Posts

Route::post('storePost', [PostController::class, 'store'])->name('storePost'); 

Route::get('posts', [PostController::class, 'index']);

Route::get('createPost', [PostController::class, 'create']); 

Route::get('updatePost/{id}', [PostController::class, 'edit']);

Route::put('update/{id}', [PostController::class, 'update'])->name('update');

Route::get('deletePost/{id}',[PostController::class,'destroy']);

Route::get('trashedPost', [PostController::class, 'trashedPost'])->name('trashedPost');

Route::get('restorePost/{id}',[PostController::class,'restore'])->name('restorePost');

Route::get('forceDelete/{id}',[PostController::class,'forceDelete'])->name('forceDelete');




//Route::fallback(function () {
   // return redirect('/');
//});

//Route::prefix('lar')-> group(function () {
    
//Route::get('test', function () {
   // return view ('test');
//});

//Route::get('test1/{id}', function ($id) {
   // return 'The ID is ' .$id;
//});

//Route::get('test2/{id?}', function ($id = 0) {
   // return 'The ID is ' .$id;
//})->where(['id'=> '[0-9]+']);

//Route::get('test3/{id?}', function ($id = 0) {
   // return 'The ID is ' .$id;
//})->whereNumber('id');

//Route::get('test4/{id?}/{name}', function ($id=0, $name) {
   // return 'The ID is ' .$id . " " . 'The Name is ' . $name;
//})->where(['id'=> '[0-9]+', 'name'=>'[a-zA-Z]+']);

//Route::get('test5/{category}', function ($category) {
  //  return 'The category  is ' .$category;
//})->whereIn('category', ['Fashion', 'applicans']);

//});
    
Route::get('about', function () {
   return view ('about');
});

Route::get('contact/{name?}', function ($name= null) {
    return 'Contact Us ' . $name;
    })->whereAlpha ('name');

Route::get('blog/{category}', function ($category) {
   return 'The category  is ' .$category;
    })->whereIn('category', ['Science', 'sports', 'math']);