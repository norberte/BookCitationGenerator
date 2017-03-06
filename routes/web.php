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


Route::get('/', function () {
    return view('welcome');
});


//routes to page for adding books
Route::get('/books/create','BookController@create');


//Route for storing user input into the database
Route::post('/books','BookController@store');

Auth::routes();

Route::get('/home', 'HomeController@index');


// route for changing password page
Route::get('/changePassword', 'changePassword@index');



Auth::routes();

//Route to the page to edit books
Route::get('/books/edit', 'BookController@update');

//Route to update edit into the database
Route::post('/books', 'BookController@update');

