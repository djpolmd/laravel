<php?

Route::get('users', function()
{

  $users = User::all();
  return View::make('users')->with('users', $users);
});

Route::get('articles', function()
{

  $users = User::all();
  return View::make('articles')->with('articles', $articles);
});

?>