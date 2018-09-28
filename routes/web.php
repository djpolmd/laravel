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


Route::get('/articles', 'ArticlesController@show_all');

Route::get('/articles/create','ArticlesController@create');

Route::get('/articles/add','ArticlesController@add');

Route::get('/articles/id_search', 'ArticlesController@id_search');


Route::get('/articles/{id}','ArticlesController@show');

Route::post('articles', 'ArticlesController@store');

/*Route::get('articles', function()
{

  $articles = articles::all();
  return View::make('articles')->with('articles', $articles);
});

*/
?>
