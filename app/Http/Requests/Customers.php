<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Customers extends FormRequest
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
            //
            'full_name' => 'required',
            'phone_number' => 'required|max: 10',
            'email' => 'required|email',
            'profile_img' => 'required'
        ];
    }
}
