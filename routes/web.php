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

//exe 1
/*Route::get('/{name?}', function ($name = 'index') {
    return  view ($name);
});*/


//exe 2 
Route::name('pages.')->group(function (){
    Route::get('/{name?}', function ($name = 'index') {
        return  view ($name);
})->name('show');
});

//Demo middleware
Route::get('/admin/{age}' ,function($age)
{
   return "ban du tuoi truy cap trang nay";
})-> middleware('checkage'); 

// EXE3
Route::get('/login', function () {
    return view('login');
});

// EXE3
Route::post('/check', function () {
    return view ('demo');
})->middleware('checklogin');

//EXE2
Route::group(['as' => 'name.'] , function () {
Route::get('/{name?}' , function($name = 'index') {
    return view($name);
}) ->name('view');   
});
