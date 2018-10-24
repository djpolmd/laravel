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

$current_user = 0;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articol','ArtController')->only(['store','update']);

Auth::routes();

Route::get('user/{id}', function ($id){
    return 'User '.$id;
    return 'User '.$name;
    
});


Route::get('/home', 'ArtController@index')->name('home');

Route::get('/articles', 'ArtController@index');			//show list of articles

Route::get('/articles/edit/{id}', 'ArtController@edit');	

Route::get('/articles/add','ArtController@create'); 			// adding new article 

Route::get('/articles/{id}','ArtController@show');			// search by id article

Route::patch('/articles/update/{id}', 'ArtController@update')->name('articol.update');	

Route::get('/email', 'ArtController@email');


?>
