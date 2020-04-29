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
Route::get('/meta', 'SiteController@meta')->name('meta');
Route::post('meta/save', 'SiteController@saveMeta')->name('meta.create');
Route::get('/promocao', 'SiteController@promo')->name('promo');
Route::get('/promocao/save', 'SiteController@savePromo')->name('promo.create');
Route::get('/colaborador', 'SiteController@colaborador')->name('colaborador');
Route::get('/promocao/save', 'SiteController@saveColaborador')->name('colaborador.create');
Auth::routes();

Route::get('/admin', function() {
    return view('admin.index');
})->name('admin')->middleware('auth');
