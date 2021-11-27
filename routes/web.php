<?php

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

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/produtos', 'ProdutoControlador@index');

// Posso colocar o middleware aqui e não no construtor do controller
Route::get('/produtos2', 'ProdutoControlador@index')
        ->middleware('auth')
        ->name('produtos2');

/**
 * Se eu colocar no kernel, em web vai proteger todas as rotas, inclusive a de login.
 *  */      

 // Aqui é referente a linha 16 do construtor ProdutoControlador
 // Para redirecionar, após logar, basta ir no controlador de login e alterarar
 // a variável: redirectTo para onde eu quero encaminhar após o login que no caso é produtos2
 Route::get('/produtos', 'ProdutoControlador@index');

