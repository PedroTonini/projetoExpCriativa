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

use App\Http\Controllers\SiteController;

Route::get('/', 'SiteController@index');
Route::get('cliente/cadastro', 'Cliente\ClienteController@cadastro');
Route::post('cliente/cadastro', 'Cliente\ClienteController@store');

//rota admin

Route::auth();
// Route::get('/admin', function() {
//     return view('admin.index');
// })->name('admin')->middleware('auth');
// Route::get('/admin/avaliacoes', function() {
//     return view('admin.avaliacoes.index');
// })->name('admin-avaliacoes')->middleware('auth');


Route::group(['middleware' => ['auth', 'role:admin'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::resource('avaliacoes/individual', 'AvaliacoesController');
    Route::get('avaliacoes/dashboard', 'AvaliacoesController@dashboard');
    Route::resource('/promocoes', 'PromocoesController');
    Route::get('promocoes/edit/{id}', 'PromocoesController@edit');
    Route::post('promocoes/edit/{id}', 'PromocoesController@update');
    Route::delete('promocoes/{id}', 'PromocoesController@destroy');
    Route::resource('/funcionarios', 'FuncionariosController');
});


Route::group(['middleware' => ['auth', 'role:cliente'], 'namespace' => 'Cliente', 'prefix' => 'cliente'], function(){
    Route::get('home', 'ClienteController@home')->name('cliente.home');
    Route::get('promocoes', 'ClienteController@promocoes')->name('cliente.promocoes');
    Route::get('avaliar', 'ClienteController@avaliar')->name('cliente.avaliar');
    Route::post('avaliacao/save', 'SiteController@avaliacaoCliente')->name('avaliacao.create');
});


Route::get('/index', 'Cliente\ClienteController@index')->name('cliente.promocoes');

Route::group(['middleware' => ['auth', 'role:funcionario'], 'namespace' => 'Funcionario', 'prefix' => 'funcionario'], function(){
    Route::get('/', 'FuncionarioController@index');
    Route::get('avaliacoes/minhasAvaliacoes', 'FuncionarioController@minhasAvaliacoes')->name('funcionario.minhasAvaliacoes');
    Route::get('/avaliacoes/avaliar', 'FuncionarioController@avaliar')->name('funcionario.avaliar');
});