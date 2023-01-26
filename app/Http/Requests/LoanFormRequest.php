<?php

namespace App\Http\Requests;

use App\Models\Book;
use App\Models\User;
use App\Rules\HasBook;
use App\Rules\HasUser;
use Illuminate\Foundation\Http\FormRequest;

class LoanFormRequest extends FormRequest
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
            'user_registration'=>['required',new HasUser],
            'book_registration'=>['required',new HasBook],
            'delivery_date'=>'date|required',

        ];
    }
}
