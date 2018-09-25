<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	//Create manualy vis model for protection of data;

	protected $fillable = [
		'title', 
		'text', 
		'image',
		'text',
		'send_to_admin_email',
		'created_at'
	];

	
}
