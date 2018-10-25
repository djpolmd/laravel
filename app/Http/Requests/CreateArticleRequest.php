<?php

namespace App\Http\Requests;


// app\Http\Requests\CreateArticleRequest

use Illuminate\Foundation\Http\FormRequest;


class CreateArticleRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */

	public function authorize()
	{
		return true;
	}

  
	public function rules()
	{
		return [
		'title' => 'required|min:3', 
		'text' => 'required', 
		'description' => 'required',
		'image',
		'text'
		 ];
	}
}
