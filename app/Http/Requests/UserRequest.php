<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'dat' => 'required|date_format:Y-m-d H:i',
        ];
    }

    public function messages()
    {
        return [
            'dat' => 'exemple: 2015-07-27 10:01',
        ];
    }
}
