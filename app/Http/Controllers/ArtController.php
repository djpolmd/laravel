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
	
	public function index()
	{
		$articol = DB::table('articols')->get();
		return view('article.articles', compact('articol')); 
	}

	public function create()
	{
		if (Auth::check())
		return view('article.create', compact('articol'));
		else return view('auth.login');
	}

	 
	public function store(Request $request)
	
	{
		
		 if($request->hasFile('filename'))
		 {
			$file = $request->file('filename');
			$name = time().$file->getClientOriginalName();
			$file->move(public_path().'/image/', $name);
		 } 
		    else 
		    	return redirect()->back()->withErrors(['OPS:', 'Introdu o imagine']);
			
			$articol = new \App\Articol;
			$date=date_create(Carbon::now());
			$format = date_format($date,"Y-m-d");
			$articol->created_at = strtotime($format);

			$articol->title = $request->title;
			$articol->description = $request->description;
			$articol->text = $request->text;
			$articol->updated_at = strtotime($format);
			$send_bool = $request->send_to_admin_email;
			$articol->was_sent_to_admin_email = 0; //by defaut = false (wasn't send);
			$articol->user_id = Auth::user()->id;
			$articol->image = $name;
			
				if ($send_bool === 'yes'){
					

					$articol->send_to_admin_email = 1;
					$articol->was_sent_to_admin_email = 1;
					$articol->save();
					Mail::to('djpolmd@gmail.com', 'New article added')->queue(new ArticleCreated($articol));
					$mesaga = ' Email trimis cu succes';
					 	 
				}
				else {  
						$articol->send_to_admin_email = 0;						
						$mesaga= ' Ati abondonat optiunea trimitere email';
						$articol->save();
					}

			return view('message', compact('mesaga'));
		}

	public function show($id)
	{
		
		$articol = \App\Articol::find($id);
		if ($articol)
			return view('article.show',compact('articol'));
		
		else return 'No such article! Go back';
	}

	public function edit($id)
	{
		if (Auth::check()){

			$articol = \App\Articol::findOrFail($id);
			return view('article.edit', compact('articol','id'));
		}
		else return view('auth.login');
	}

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
}