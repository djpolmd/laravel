<?php 

namespace App\Http\Controllers;
use App\Article;
use app\Http\Requests;
use app\Http\Requests\ArticleRequest;
use Illuminate\Http\Response;
use app\Http\Controllers\Controller;
use DB;
use App\Quotation;
use Request;
// use Carbon\Carbon;

class ArticlesController extends Controller {

  
    public function add()
    {
        return view('aticle.create');
    }

    public function show_all()
    {
        $articol = DB::table('articles')->get();

    return view('article.articles', compact('articol')); //variable without $ needed just in '';

    }

    // cautam articol dupa id
    public function index($articol_id )
    {
        $article = Article::find($articol_id);

        return $article;
    }

    public function store()
    {
        $input = Requests::all();

        return $input;
    }
}

 ?>