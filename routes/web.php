<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome')->with('headerClass', 'denniMenu');
})->name('hlavni-strana');

Route::get('/jidelni-listek', function () {
    return view('jidelni-listek')->with('headerClass', 'jidelniListek');
})->name('jidelni-listek');

Route::get('/galerie', function () {
    return view('galerie')->with('headerClass', 'galerie');
})->name('galerie');

Route::get('/o-nas', function () {
    return view('o-nas')->with('headerClass', 'o_nas');
})->name('o-nas');

Route::get('/kontakt', function () {
    return view('kontakt')->with('headerClass');
})->name('kontakt');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store')->name('home.store');
Route::delete('/home', 'HomeController@destroy')->name('home.destroy');