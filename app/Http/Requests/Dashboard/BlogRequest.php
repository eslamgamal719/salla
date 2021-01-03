<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required|max:100',
            'excerpt' => 'required',
            'content' => 'required',
            'classification' => 'nullable',
            'link' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,png,jpeg',
        ];
    }
}
