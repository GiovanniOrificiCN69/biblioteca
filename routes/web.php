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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return "Home del mio sito laravel";
});

Route::get('/posts', function () {
    return "Elnco degli articoli";
});

Route::get('/libri',[ 'as' =>'libriElenco', ] function () {
    return "Benvenuti i Laravel";
});

//redirect verso /libri
Route::get('/elencolibri', function () {
  //richiamo la rotta usando il nome
       return redirect( route('libriElenco') ); 
       //effetto un redirect alla pagina libri Elenco
});
