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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('user/{id}', function ($id){
    return 'User '.$id;
    return 'User '.$name;
    
});

//--------------------profile -----------------------------

Route::get('foo', 'Photos\AdminController@method');

Route::get('users', function()
{

  $users = User::all();
  return View::make('users')->with('users', $users);
});


Route::get('articles', function()
{

  $articles = articles::all();
  return View::make('articles')->with('articles', $articles);
});