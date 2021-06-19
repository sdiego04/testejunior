<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Address;

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
//rota para chamar a view principal, para inserir o cep desejado
Route::get('/', function () {
    return view('viewsCep/home');
});
//rota que realiza a consulta dentro da classe Address
Route::post('consultaCep/',[Address::class,'get_address']);
