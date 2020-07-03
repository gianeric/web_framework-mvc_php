<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

//get    retornar um dado
//post   salvar um dado
//put    atualizar um dado
//delete deletar um dado

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/areas', 'AreaController@Index');
//Route::get('/areas/create', 'AreaController@create');
//Route::get('/areas/store', 'AreaController@store');

Route::resource('areas', 'AreaController');