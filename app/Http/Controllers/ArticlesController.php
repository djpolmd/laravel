<?php 

namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;

use DB;
use App\Quotation;

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

	public function store(CreateArticleRequest  $request)
	{
		
		Article::create($request->all());

		return redirect('articles');

		return $input; //debug only
	}


	// introducem un articol 
//----------------------------
	public function create()
	{
		return view('article.create', compact('articol'));
				$input['published_at'] = Carbon::now();
		$input['updated_at'] = Carbon::now();
		
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