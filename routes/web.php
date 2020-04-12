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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'BestSeller@index');
Route::get('/booklist','BooklistController@index');

Route::prefix('book')->group(function () {
    Route::get('/{name}/{title}', 'BookController@index')->name('book');
});


Route::prefix('otherlist')->group(function () {
    Route::get('/{id}', 'OtherlistController@index')->name('otherlist');
    Route::post('/otherlist', 'OtherlistController@searchType')->name('other');
});


Route::prefix('booklist')->group(function (){
    Route::post('/booklist-ok','BooklistController@insert')->name('books-add');
    Route::post('/books-update/{id}','BooklistController@update')->name('books-update');
    Route::get('/books-delete/{id}','BooklistController@delete')->name('books-delete');
});





