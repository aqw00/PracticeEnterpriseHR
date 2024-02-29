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

Route::get('/home', function () {
    return view('home');
}) -> name('home');

Route::get('/holiday', function(){
    //return response('<h1>Hello World!</h1>');
    return view('holiday');
}) -> name('holiday');

Route::get('/man', function () {
    return view('man');
}) -> name('man');

Route::get('/posts/{id}', function($id){
    return response('Post ' .$id);
});
