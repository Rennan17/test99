<?php
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
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


//Route::get('/contato','ContatoController@index');
Route::get('contato', [ContatoController::class, 'index']);
Route::get('categoria', [CategoriaController::class, 'index']);
Route::get('cliente', [ClienteController::class, 'index']);
//Route::get('/categoria','CategoriaController@index');

