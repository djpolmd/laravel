<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	//Create manualy vis model for protection of data;

	protected $fillable = [
		'title', 
		'text', 
		'description',
		'image',
		'text',
		'was_sent_to_admin_email',
		'send_to_admin_email',
		'user_id',
		'created_at'
	];

 public function setPublishedAttribute($date)
        {
            $this->attribute['created_at'] = Carbon::parse($date);
        }


}