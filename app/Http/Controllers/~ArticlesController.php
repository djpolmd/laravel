<?php namespace App\Http\Controllers;

use app\article;
use app\Http\Requests;
use app\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use app\Http\Controllers\Controller;


// use Carbon\Carbon;

class ArticlesController extends Controller {

    public function index()
    {
//        $articles = Article::all();  // We instead used syntax below to show data in chronological order
//
//        $articles = Article::latest('published_at')->get(); // Added where clause to get current articles only

        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }


    public function show($id)
    {

        $article = Article::findOrFail($id);  // Use findOrFail for 404 error

//        dd($article); // die_dump to show all $article data
//
//        dd($article->created_at->addDays(8)->diffForHumans());
//
//        dd($article->published_at); // protected $dates = ['published_at']; in Article.php making it a Carbon instance

        return view('articles.show', compact('article'));

    }

    public function create()
    {

        return view('articles.create');

    }

    public function store(ArticleRequest $request) // Added (CreateArticleRequest $request) for validation
    {

//        $input = Request::all();  // Crtl+Atl+N
//
//        Article::create($input);  // This Refactored-Inline with line above gives output(line) below
//
//        Article::create(Request::all()); // now we are receiving the $request so there's no need to use the facade
//
//        $this->validate($request, ['title' => 'required', 'body' => 'required']); // Additional validation option

        Article::create($request->all());


        return redirect('articles');

    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));

    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');

    }
} 

 ?>