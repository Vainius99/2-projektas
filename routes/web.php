<?php
namespace App\Http\Controllers;
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
Route::prefix('authors')->group(function() {
    Route::get('','App\Http\Controllers\AuthorController@index')->name('author.index');
    // Route::get('',[AuthorController::class, 'index'])->name('author.index');
    Route::get('create','App\Http\Controllers\AuthorController@create')->name('author.create');
    Route::post('store','App\Http\Controllers\AuthorController@store')->name('author.store');
});
Route::prefix('bookitems')->group(function() {
    Route::get('','App\Http\Controllers\BookitemsController@index')->name('bookitem.index');
    // Route::get('',[AuthorController::class, 'index'])->name('author.index');
    Route::get('create','App\Http\Controllers\BookitemsController@create')->name('bookitem.create');
    Route::post('store','App\Http\Controllers\BookitemsController@store')->name('bookitem.store');
});
