<?php

namespace ZMS\Http\Requests;

use ZMS\Http\Requests\Request;
use Auth;

class BlogPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ( ! Auth::check()) {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'text' => 'required'
        ];
    }
}
