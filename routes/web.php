<?php

use App\Http\Controllers\EleveController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'EleveController@index');
Route::resource('eleve', 'EleveController');
Route::resource('promo', 'PromoController');
Route::resource('module', 'ModuleController');
Route::post('promo/storeModule', 'PromoController@storeModule')->name('promo.storeModule');
Route::post('module/storePromo', 'ModuleController@storePromo')->name('module.storePromo');

Route::post('eleve/storeModule', 'EleveController@storeModule')->name('eleve.storeModule');
Route::post('module/storeEleve', 'ModuleController@storeEleve')->name('module.storeEleve');





