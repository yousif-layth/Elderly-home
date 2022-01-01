<?php
namespace App;
use Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
//*/
Route::get('/wel', function () {
    return view('welcome');
})->name('welc');
Route::get('h', function () {
    return view('hom');
});
Route::get('/', function () {
    return view('hom');
});
Route::get('insert','StudentController@create');
Route::post('save','StudentController@store')->name('off.store');
Route::delete('/students/{student}','StudentController@destroy');
Route::get('/logout', 'AdminController@logout');
Route::get('show', 'ContactController@create') ->name('hi');
Route::post('store', 'ContactController@store') -> name('offers.store');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/user', 'UserController@index')->name('user');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'UserController@show')->middleware('auth');
