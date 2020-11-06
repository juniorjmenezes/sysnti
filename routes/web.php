<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentosController;
use App\Http\Controllers\PerifericosController;
use App\Http\Controllers\ComputadoresController;
use App\Http\Controllers\ImpressorasController;
use App\Http\Controllers\ProjetoresController;
use App\Http\Controllers\RoteadoresController;
use App\Http\Controllers\ScannersController;
use App\Http\Controllers\SecretariasController;
use App\Http\Controllers\SetoresController;
use App\Models\Setores;

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

Route::get('/', EquipamentosController::class);
//temporario
Route::resource('/adicionar-equipamento', EquipamentosController::class);
Route::resource('/adicionar-periferico', PerifericosController::class);
Route::resource('/adicionar-secretaria', SecretariasController::class);
Route::resource('/adicionar-secretaria', SecretariasController::class);
Route::resource('/adicionar-setor', SetoresController::class);
//temporario
Route::resource('/computadores', ComputadoresController::class);
Route::resource('/impressoras', ImpressorasController::class);
Route::resource('/projetores', ProjetoresController::class);
Route::resource('/scanners', ScannersController::class);
Route::resource('/roteadores', RoteadoresController::class);
Route::resource('/secretarias', SecretariasController::class);
Route::resource('/setores', SetoresController::class);
//
Route::get('/computadores-desktop', 'App\Http\Controllers\ComputadoresController@desktops');
Route::get('/computadores-notebook', 'App\Http\Controllers\ComputadoresController@notebooks');
Route::get('/computadores-servidor', 'App\Http\Controllers\ComputadoresController@servidores');
Route::get('/impressoras-jato-de-tinta', 'App\Http\Controllers\ImpressorasController@jato_tinta');
Route::get('/impressoras-laser', 'App\Http\Controllers\ImpressorasController@laser');
Route::get('/outras-impressoras', 'App\Http\Controllers\ImpressorasController@outras_impressoras');
Route::get('/projetores-avulso', 'App\Http\Controllers\ProjetoresController@avulsos');
Route::get('/projetores-integrados', 'App\Http\Controllers\ProjetoresController@integrados');
Route::get('/roteadores-com-fio', 'App\Http\Controllers\RoteadoresController@com_fio');
Route::get('/roteadores-sem-fio', 'App\Http\Controllers\RoteadoresController@sem_fio');
Route::get('/scanners-horizontais', 'App\Http\Controllers\ScannersController@horizontais');
Route::get('/scanners-portateis', 'App\Http\Controllers\ScannersController@portateis');
Route::get('/scanners-verticais', 'App\Http\Controllers\ScannersController@verticais');
//
Route::get('/equipamentos-ativos', 'App\Http\Controllers\EquipamentosController@ativos');
Route::get('/equipamentos-inserviveis', 'App\Http\Controllers\EquipamentosController@inserviveis');
Route::get('/equipamentos-em-manutencao', 'App\Http\Controllers\EquipamentosController@manutencao');
Route::get('/equipamentos-remanejados', 'App\Http\Controllers\EquipamentosController@remanejados');
//
Route::get('/detalhes-computador', 'App\Http\Controllers\ComputadoresController@show');
Route::get('/detalhes-impressora', 'App\Http\Controllers\ImpressorasController@show');
Route::get('/detalhes-projetor', 'App\Http\Controllers\ProjetoresController@show');
Route::get('/detalhes-scanner', 'App\Http\Controllers\ScannersController@show');
Route::get('/detalhes-roteador', 'App\Http\Controllers\RoteadoresController@show');
//
Route::post('/inserir-periferico', 'App\Http\Controllers\PerifericosController@perifericos');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
