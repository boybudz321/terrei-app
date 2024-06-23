<?php

use Illuminate\Support\Facades\Route;
use App\Http\HomeController;
use App\Models\menu;

Route::get('/', function () {
    $menus = menu::all();
        return view('home',compact('menus'));
})->middleware('auth');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/edit', 'HomeController@edit')->name('edit');
// Route::post('/update', 'HomeController@update')->name('update');
// Route::post('/add', 'HomeController@add')->name('add');
// Route::post('/delete', 'HomeController@delete')->name('delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::post('/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::post('/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add');
Route::post('/delete', [App\Http\Controllers\HomeController::class, 'index'])->name('delete');
