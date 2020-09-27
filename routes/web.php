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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



Route::group(['middleware'=>'auth'],function(){
    // Route::resource('/entrada','EntradaController')->middleware(['language']);
    Route::resource('/entrada','EntradaController');
    Route::post('/entrada/comentario','EntradaController@comentarioGuardar')->name('comentario.guardar');
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/','BlogController@index')->name('blog.index');
Route::get('/blog/{id}','BlogController@show')->name('blog.show');