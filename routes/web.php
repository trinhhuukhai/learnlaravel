<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return 'helowordl';
});
Route::get('/','HomeController@index'); //lay action la index : 1 controller co nhieu action khac nhau

Route::get('/test', function(){
    return view('test');
});
Route::get('products', function(){
    return 'view products';
});
Route::get('user', function(){
    return 'view users';
});


//ket noi csdl
//category
Route::get('/category','CategoryController@index');
Route::get('/category/{id}','CategoryController@view');

