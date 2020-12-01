<?php

use Illuminate\Support\Facades\Route;
use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\EquipamentosController;
use App\Http\Controllers\PerifericosController;
use App\Http\Controllers\ComputadoresController;
use App\Http\Controllers\ImpressorasController;
use App\Http\Controllers\ProjetoresController;
use App\Http\Controllers\RoteadoresController;
use App\Http\Controllers\ScannersController;
use App\Http\Controllers\SecretariasController;
use App\Http\Controllers\SetoresController;
use App\Http\Controllers\SysntiController;
//
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use Laravel\Fortify\Http\Controllers\PasswordController;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Laravel\Fortify\Http\Controllers\ConfirmedPasswordStatusController;

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

Route::get('/', SysntiController::class);
//temporario
Route::resource('/adicionar-equipamento', EquipamentosController::class)->middleware('auth');
Route::resource('/adicionar-periferico', PerifericosController::class)->middleware('auth');
Route::resource('/adicionar-secretaria', SecretariasController::class)->middleware('auth');
Route::resource('/adicionar-secretaria', SecretariasController::class)->middleware('auth');
Route::resource('/adicionar-setor', SetoresController::class)->middleware('auth');
Route::resource('/perifericos', PerifericosController::class)->middleware('auth');
//Usuários
Route::get('/adicionar-usuario', 'App\Http\Controllers\UsuariosController@index');
//Route::resource('/computadores', ComputadoresController::class);
//Route::resource('/impressoras', ImpressorasController::class);
Route::resource('/projetores', ProjetoresController::class)->middleware('auth');
Route::resource('/scanners', ScannersController::class)->middleware('auth');
Route::resource('/roteadores', RoteadoresController::class)->middleware('auth');
Route::resource('/secretarias', SecretariasController::class)->middleware('auth');
Route::resource('/setores', SetoresController::class)->middleware('auth');
//Periféricos
Route::get('/autotransformadores', 'App\Http\Controllers\PerifericosController@autotransformadores')->middleware('auth');
Route::get('/estabilizadores', 'App\Http\Controllers\PerifericosController@estabilizadores')->middleware('auth');
Route::get('/nobreaks', 'App\Http\Controllers\PerifericosController@nobreaks')->middleware('auth');
Route::get('/modulos-isoladores', 'App\Http\Controllers\PerifericosController@modulos_isoladores')->middleware('auth');
Route::get('/monitores', 'App\Http\Controllers\PerifericosController@monitores')->middleware('auth');
Route::get('/webcams', 'App\Http\Controllers\PerifericosController@webcams')->middleware('auth');
//
Route::get('/computadores', 'App\Http\Controllers\ComputadoresController@index')->middleware('auth');
Route::get('/computadores/desktops', 'App\Http\Controllers\ComputadoresController@desktops')->middleware('auth');
Route::get('/computadores/notebooks', 'App\Http\Controllers\ComputadoresController@notebooks')->middleware('auth');
Route::get('/computadores/servidores', 'App\Http\Controllers\ComputadoresController@servidores')->middleware('auth');
Route::get('/computadores/ativos', 'App\Http\Controllers\ComputadoresController@ativos')->middleware('auth');
Route::get('/computadores/inserviveis', 'App\Http\Controllers\ComputadoresController@inserviveis')->middleware('auth');
Route::get('/computadores/em-manutencao', 'App\Http\Controllers\ComputadoresController@manutencao')->middleware('auth');
Route::get('/computadores/remanejados', 'App\Http\Controllers\ComputadoresController@remanejados')->middleware('auth');
// IMPRESSORAS
Route::get('/impressoras', 'App\Http\Controllers\ImpressorasController@index')->middleware('auth');
Route::get('/impressoras/jato-de-tinta', 'App\Http\Controllers\ImpressorasController@jato_tinta')->middleware('auth');
Route::get('/impressoras/laser', 'App\Http\Controllers\ImpressorasController@laser')->middleware('auth');
Route::get('/impressoras/outras-impressoras', 'App\Http\Controllers\ImpressorasController@outras_impressoras')->middleware('auth');
Route::get('/impressoras/ativas', 'App\Http\Controllers\ImpressorasController@ativos')->middleware('auth');
Route::get('/impressoras/inserviveis', 'App\Http\Controllers\ImpressorasController@inserviveis')->middleware('auth');
Route::get('/impressoras/em-manutencao', 'App\Http\Controllers\ImpressorasController@manutencao')->middleware('auth');
Route::get('/impressoras/remanejadas', 'App\Http\Controllers\ImpressorasController@remanejados')->middleware('auth');
//
Route::get('/projetores-avulso', 'App\Http\Controllers\ProjetoresController@avulsos')->middleware('auth');
Route::get('/projetores-integrados', 'App\Http\Controllers\ProjetoresController@integrados')->middleware('auth');
Route::get('/roteadores-com-fio', 'App\Http\Controllers\RoteadoresController@com_fio')->middleware('auth');
Route::get('/roteadores-sem-fio', 'App\Http\Controllers\RoteadoresController@sem_fio')->middleware('auth');
Route::get('/scanners-horizontais', 'App\Http\Controllers\ScannersController@horizontais')->middleware('auth');
Route::get('/scanners-portateis', 'App\Http\Controllers\ScannersController@portateis')->middleware('auth');
Route::get('/scanners-verticais', 'App\Http\Controllers\ScannersController@verticais')->middleware('auth');
//
Route::get('/equipamentos-ativos', 'App\Http\Controllers\EquipamentosController@ativos')->middleware('auth');
Route::get('/equipamentos-inserviveis', 'App\Http\Controllers\EquipamentosController@inserviveis')->middleware('auth');
Route::get('/equipamentos-em-manutencao', 'App\Http\Controllers\EquipamentosController@manutencao')->middleware('auth');
Route::get('/equipamentos-remanejados', 'App\Http\Controllers\EquipamentosController@remanejados')->middleware('auth');
Route::get('/perifericos-ativos', 'App\Http\Controllers\PerifericosController@ativos')->middleware('auth');
Route::get('/perifericos-inserviveis', 'App\Http\Controllers\PerifericosController@inserviveis')->middleware('auth');
Route::get('/perifericos-em-manutencao', 'App\Http\Controllers\PerifericosController@manutencao')->middleware('auth');
Route::get('/perifericos-remanejados', 'App\Http\Controllers\PerifericosController@remanejados')->middleware('auth');
//
Route::get('/computadores/{id}/detalhes-computador', 'App\Http\Controllers\ComputadoresController@show')->middleware('auth');
Route::get('/detalhes-impressora', 'App\Http\Controllers\ImpressorasController@show')->middleware('auth');
Route::get('/detalhes-projetor', 'App\Http\Controllers\ProjetoresController@show')->middleware('auth');
Route::get('/detalhes-scanner', 'App\Http\Controllers\ScannersController@show')->middleware('auth');
Route::get('/detalhes-roteador', 'App\Http\Controllers\RoteadoresController@show')->middleware('auth');
//
Route::post('/inserir-periferico', 'App\Http\Controllers\PerifericosController@perifericos')->middleware('auth');
// API
Route::get('/api/perifericos', 'App\Http\Controllers\PerifericosController@api')->middleware('auth');
// Controle de Usuários
Route::get('/usuarios/perfil', 'App\Http\Controllers\UsuariosController@show')->middleware('auth');
Route::put('update', [ProfileInformationController::class, 'update'])->middleware(['auth'])->name('usuario-update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
