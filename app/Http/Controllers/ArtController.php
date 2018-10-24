<?php

namespace App\Http\Controllers;

use App\Article;
use App\Mail\ArticleCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use DB;
use App\Quotation;
use Carbon\Carbon;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ArtController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$articol = DB::table('articols')->get();
		return view('article.articles', compact('articol')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		if (Auth::check())
		return view('article.create', compact('articol'));
		else return view('auth.login');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	
	public function store(Request $request)
	
	{
		
		 if($request->hasFile('filename'))
		 {
			$file = $request->file('filename');
			$name = time().$file->getClientOriginalName();
			$file->move(public_path().'/image/', $name);
		 }
		
			$articol = new \App\Articol;
			$date=date_create(Carbon::now());
			$format = date_format($date,"Y-m-d");
			$articol->created_at = strtotime($format);

			$articol->title = $request->title;
			$articol->description = $request->description;
			$articol->text = $request->text;
			$articol->updated_at = strtotime($format);
			$articol->send_to_admin_email = (int)$request->send_to_admin_email;
			$articol->was_sent_to_admin_email = (int)$request->was_sent_to_admin_email;
			$articol->user_id = Auth::user()->id;
			$articol->image = $name;
			$articol->save();
			Mail::to('djpolmd@gmail.com', 'Admin')->queue(new ArticleCreated($articol));
				return redirect('/articles');
		}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		
		$articol = \App\Articol::find($id);
		if ($articol)
			return view('article.show',compact('articol'));
		
		else return 'No such article! Go back';
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if (Auth::check()){

			$articol = \App\Articol::findOrFail($id);
			return view('article.edit', compact('articol','id'));
		}
		else return view('auth.login');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	
	public function update(CreateArticleRequest $request, $id)
	{
		if (Auth::check()){

			$articol = \App\Articol::findOrFail($id);
			$articol->title = $request->get('title');
			$articol->description = $request->get('description');
			$articol->image = $request->get('image');
			$articol->text = $request->get('text');
			$articol->created_at = $request->created_at;
			$articol->user_id = Auth::user()->id;
			$articol->save();
		return redirect('/articles');
		}
		else return view('auth.login');
	}


	// adaugam un articol in lista

	public function email() 
	{
		Mail::to('djpolmd@gmail.com', 'Admin')->queue(new ArticleCreated('Verify Integration'));
	}
}