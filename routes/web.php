<?php
use App\Models\menu;
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
    $menus = menu::all();
        return view('home',compact('menus'));
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit', 'HomeController@edit')->name('edit');
Route::post('/update', 'HomeController@update')->name('update');
Route::post('/add', 'HomeController@add')->name('add');
Route::post('/delete', 'HomeController@delete')->name('delete');
