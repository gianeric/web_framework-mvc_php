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



// get -> Retornar um dado ou alguma visualização
// post -> salvar um dado
// put -> atualizar um dado
// delete -> excluir um data


// Route::get('/areas', 'AreaController@index');
// Route::get('/areas/create', 'AreaController@create');
// Route::post('/areas/store', 'AreaController@store');

// Route::resource('areas', 'AreaController')
//     ->only('index', 'edit', 'destroy', 'update', 'store');

// Route::resource('areas', 'AreaController')
//     ->except('show');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => '', 'as' => '', 'middleware' => ['auth', 'log']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => '', 'as' => '', 'middleware' => ['admin']], function () {
        Route::resource('areas', 'AreaController')
            ->except('show');

        Route::resource('studies', 'StudyController')
            ->except('show');
    });
});
