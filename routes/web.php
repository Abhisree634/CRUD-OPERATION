<?php

use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','FrontEndController@homepage');
Route::get('home','HomeController@home')->name('Home');

Route::get('new-user','HomeController@create')->name('create.user');

Route::post('save-user','HomeController@save')->name('save.user');
Route::get('edit-user/{id}','HomeController@edit')->name('edit.user');

Route::post('update-user','HomeController@update')->name('update.user'); 
Route::get('delete-user/{id}','HomeController@delete')->name('delete.user');

Route::get('activate-user/{id}','HomeController@activate')->name('activate.user');

Route::get('force-delete-user/{id}','HomeController@forceDelete')->name('force.delete.user');




   