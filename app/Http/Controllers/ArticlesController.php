<?php 

namespace App\Http\Controllers;
use app\article;
use app\Http\Requests;
use app\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use app\Http\Controllers\Controller;
use DB;
use App\Quotation;

// use Carbon\Carbon;

class ArticlesController extends Controller {

  

    public function show_all()
    {
        $articol = DB::table('articles')->get();

    return view('article.articles', compact('articol')); //variable without $ needed just in '';

    }
    public function index($id)
    {
        $article = Artcle::find($id);

        return $article;
    }

}

 ?>