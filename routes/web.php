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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('user/{id}', function ($id){
    return 'User '.$id;
    return 'User '.$name;
    
});




//--------------------Articles -----------------------------

Route::get('/articles', 'ArticlesController@show_all');			//show list of articles
Route::get('/articles/add','ArticlesController@add'); 			// adding new article 
Route::post('articles/save', 'ArticlesController@save');   		// save created article with funtion (store)
Route::get('/articles/id_search', 'ArticlesController@id_search'); //search new article
Route::get('/articles/{id}','ArticlesController@show');			// search by id article

Route::patch('/articles/{id}/update', 'ArticlesController@update');	//Update atricles with data
Route::get('/articles/{id}/edit', 'ArticlesController@edit');	
//Route::resource('articles','ArticlesController');



?>
