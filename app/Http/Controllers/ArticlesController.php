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
use Carbon\Carbon;

class ArticlesController extends Controller {

 	 // adaugam un articol in lista

	public function add()
	{
	$articol = DB::table('articles')->get();
	return view('article.articles', compact('articol'));
	
	}
	
	// aratam toate articole existente;
//------------------------------------
	public function index()
	{
		$articol = Article::all();

	return view('article.articles', compact('articol')); //variable without $ needed just in '';
	}

	public function show_all()
	{
		$articol = DB::table('articles')->get();

	return view('article.articles', compact('articol')); //variable without $ needed just in '';

	}

// -------------Toate articole-------------------

	public function store()
	{
		$input = Request::all();

		$input['published_at'] = Carbon::now();

		Article::create($input);

		return redirect('articles');

		return $input;
	}


	// introducem un articol 
//----------------------------
	public function create()
	{
		return view('article.create', compact('articol'));
	}
	

	// cautam articol dupa id
//---------------------------------------
	public function show($id)
	{
		$articol = Article::find($id);

		return view('article.show',compact('articol'));

		//return $article;
	}
	public  function id_search()
	{
		return view('article.id_search', compact('articol'));
	}

}

 ?>