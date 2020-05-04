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

Route::get('/admin', function() {
    return view('admin.index');
})->name('admin')->middleware('auth');

Route::post('avaliacao/save', 'SiteController@avaliacaoCliente')->name('avaliacao.create');