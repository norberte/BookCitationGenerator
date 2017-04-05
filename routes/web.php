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

- To create a "session" (or a middleware), just attach "->middleware('auth')" to the end
This makes the user have to be logged in to be able to access that page
*/
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/addhome/{bookcollection}','BookcollectionController@addbooks')->middleware('auth');

Route::post('/bookadd/{id}','BookcollectionController@add')->middleware('auth');



Auth::routes();


Route::get('/books/create','BookController@create')->middleware('auth');
//routes to page for adding books
Route::get('/books/{id}/delete','BookController@destroy')->middleware('auth');

//Route for storing user input into the database
Route::post('/books','BookController@store')->middleware('auth');

//Route to the page to edit books
Route::get('/books/{books}/edit', 'BookController@edit')->middleware('auth');


//Route to update edit into the database
Route::post('/books/{books}/update', 'BookController@update')->middleware('auth');

//Route to show all info about a book, {Book} expects a bid
Route::get('/books/{Book}', 'BookController@show')->middleware('auth');

//delete selected book, {Book} expects a bid
Route::delete('/books/{Book}','BookController@destroy')->middleware('auth');



// route for changing password page
Route::get('/changePassword', 'changePassword@index')->middleware('auth');

//route to update database with new password
Route::post('/changePassword', 'changePassword@update')->middleware('auth');

// routes for templates
Auth::routes();

//routes to page for creating a Template
Route::get('/templates/create','TemplateController@create')->middleware('auth');

//Route for storing custom template into the database
Route::post('/templates','TemplateController@store')->middleware('auth');

//Route to the template page
Route::get('/templates', 'TemplateController@index')->middleware('auth');

//Route to the page to edit templates
Route::get('/templates/{tname}/edit', 'TemplateController@edit')->middleware('auth');

//Route to update edit templates into the database
Route::post('/templates/{tname}', 'TemplateController@update')->middleware('auth');
//Route for iframe template preview
Route::get('/templatepreview/{tname}', 'TemplateController@preview')->middleware('auth');

Route::post('/applytemplate/preview/{tname}','TemplateController@generateCitations')->middleware('auth');

//Route to delete a selected template, {tname} - name of template expected

Route::post('/templates/delete/{tname}', 'TemplateController@destroy')->middleware('auth');

Route::get('/templates/apply/{tname}', 'TemplateController@applyTemplate')->middleware('auth');


//Route to show all info about specific book, {tname} - name of template expected
Route::get('/templates/{tname}', 'TemplateController@show')->middleware('auth');
Route::get('/templates/apply', 'TemplateController@applyTemplate')->middleware('auth');


/*this is pretty cool instead of having to define every single route for get, post, delete patch etc. I defined a resouceful controller that automatically links to the required controller method here is an example of how the routes work:
anything in the URL that links to bookcollections with a get method will be redirected to bookcollections.index which sends you to the index method of bookcolectionController . To see all the other routes in cmd type php artisan route:list. To test it out in the url bar enter the address http://localhost/bookcat/public/bookcollections that should link to the index page!  , by Andry 3/16/2017*/

Route::resource('bookcollections','BookcollectionController');


//Route to template viewer page
//Route::get('/templates', 'TemplateController@view');

//this makes the it so you can delete a template from the database using datatables
Route::get('/scripts/templateview/', 'TemplateController@templateview')->middleware('auth');

//searching for templates
Route::post('templates/template/search', 'BookCollectionController@search')->middleware('auth');

//route to export HTML page
Route::get('/exportThis', 'HomeController@export')->middleware('auth');

//route to export HTML page
Route::post('/exportThis', 'HomeController@exportScript')->middleware('auth');

