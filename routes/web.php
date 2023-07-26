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

Route::get('/test',function(){
    return view('view1');
});

// Route::get('/post/{id?}/comment/{commentid?}',function(string $id = null, string $comment=null){
//     if($id){
//         return "<h1>Post Id:".$id."</h1><h2>".$comment."</h2>";
//     }else{
//         return "<h1>Post Id:no id found</h1>";
//     }   
// });

Route::get('/post/{id?}',function(string $id = null, string $comment=null){
    if($id){
        return "<h1>Post Id:".$id."</h1>";
    }else{
        return "<h1>Post Id:no id found</h1>";
    }   
})->where('id','[0-9]+');

//whereNumber();
//whereAlpha();
//whereAlphaNumeric();
//whereIN('id',['movie','song','game']);
//where('id','[0-9]+');
//if we want to add validation for two parameter it is done like ->where('id','[0-9]+')->where('comment','[a-zA-Z]+');

/*named route start*/
Route::get('/homeeee',function(){
    return view('home');
})->name('home');

Route::get('/first',function(){
    return view('first');
});
/*named route end*/


/* #######Route Redirection start*/
Route::redirect('/about','/test');

/* #######Route Redirection end*/
/*group route start*/
Route::prefix('page')->group(function(){
    Route::get('/page1',function(){
        return "<h1>Page1</h1>";
    });
    Route::get('/page2',function(){
        return "<h1>Page2</h1>";
    });
    Route::get('/page3',function(){
        return "<h1>Page3</h1>";
    });
});

/*group route end */

/*fallback start */
Route::fallback(function(){
    return "<h1>Page not found</h1>";
});
/*fallback end */