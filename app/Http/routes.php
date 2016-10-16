<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BookController@index');


Route::get('book', function () {
    $book = App\Book::find(1);
    print( $book );
});

Route::post('addbook', 'BookController@store');
Route::post('delete', 'BookController@delete');
Route::post('edit', 'BookController@edit');
Route::post('update', 'BookController@update');