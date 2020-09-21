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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|max:255|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'confirmed|string|min:8|max:255',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['email'] .= ",{$this->user}";
            $rules['password'] .= "|nullable";
        }else if (in_array($this->method(), ['PUT', 'PATCH'])){
            $rules['password'] .= "|required";
        }

        return $rules;
    }
}
