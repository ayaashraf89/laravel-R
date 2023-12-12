<?php

use Illuminate\Support\Facades\Route;

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



Route::get('food', function () {
    return view('food');
});

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