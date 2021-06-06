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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('/edit', 'UserController@edit')->name('edit');
    Route::patch('/edit/{user}', "UserController@update")->name('update');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/adminpage', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/datauser', 'AdminController@datauser')->name('datauser');
    Route::get('/datauser/{user}/edit', 'AdminController@edit_datauser')->name('edit.datauser');
    Route::patch('/edit/{user}', "AdminController@update_datauser")->name('update.datauser');
});

