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

	return view('article.create', compact('articol'));

	$input['published_at'] = Carbon::now();
	$input['updated_at'] = Carbon::now();
	
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

	public function save(CreateArticleRequest  $request)
	{

		
	$articol = Article::create($request->all());

		return redirect('/articles');

	//	return $request; //debug only
	}



	// cautam articol dupa id
//---------------------------------------
	public function show($id)
	{
		$articol = Article::find($id);

		return view('article.show',compact('articol'));

	
	}

	public function update(CreateArticleRequest $request, $id)
	{
		$articol = Article::find($id);

		$articol->title = $request->get('title');
		$articol->description = $request->get('description');
		$articol->image = $request->get('image');
		$articol->text = $request->get('text');
		$articol->created_at = $request->created_at;

		$articol->save();
	return redirect('/articles');
	}
	

	public function edit($id)
	{
		$articol = Article::findOrFail($id);

		//return $articol;

		return view('article.edit', compact('articol','id'));
	}

	public  function id_search()
	{
		return view('article.id_search', compact('articol'));
	}

}

 ?>