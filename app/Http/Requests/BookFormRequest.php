<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'book_registration'=>'required|numeric|digits_between:5,10',
            'genre_id'=>'required|numeric|max:5',
            'available'=>'required',
            'book_name'=>'required|string|min:3|max:30',
            'author'=>'required|string|min:3|max:20',
        ];
    }
}
