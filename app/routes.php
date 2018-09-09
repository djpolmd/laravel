<php?

//Route::get('articles', 'ArticlesController@index');
//
//Route::get('articles/create', 'ArticlesController@create');
//
//Route::get('articles/{id}', 'ArticlesController@show');
//
// Follow REST practices
//
//Route::post('articles', 'ArticlesController@store');
//
//Route::get('articles/{id}/edit', 'ArticlesController@edit');

Route::resource('articles', 'ArticlesController');


?>