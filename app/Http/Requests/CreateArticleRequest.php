<?php

namespace App\Http\Requests;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'title' => 'required|min:3', 
        'text' => 'required', 
        'description' => 'required',
        'image',
        'text',
        'was_sent_to_admin_email' => 'required|integer', 
        'send_to_admin_email' => 'required|integer',
        'user_id',
        'created_at' => 'required|date' ];
    }
}
