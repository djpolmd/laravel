<?php

namespace App\Mail;

use App\Articol;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\ArticleController;


class ArticleCreated extends Mailable
{
	use Queueable, SerializesModels;

	public  $articol;


	public function __construct(Articol $articol)
	{
		$this->articol = $articol; 

	}


	public function build()
	{
		return $this->markdown('admin.emails.articlecreated')->from('website@test.com')
		->with([
						'art_id' 	=> $this->articol->id,
						'art_title' => $this->articol->title,
						'art_data'  => $this->articol->created_at,
						'user'      => $this->articol->user_id,
					]);
	}
}
