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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
    return view('view1');
});

// Route::get('/post',function(){
//     return view('post');
//     // we can also return html directly like 
//     //return "<h1>post PAGE</h1>";
// });

Route::view('post','/post');// first parameter is name of view and second parameter is name of route

Route::get('/post/firstpost',function(){
    return view('firstpost');
});