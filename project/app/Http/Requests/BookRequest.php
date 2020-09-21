<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
        $rules =  [
            'isbn' => 'required|string|max:255|min:13|unique:books,isbn',
            'title' => 'required|string|max:255|min:3',
            'author' => 'required|string|max:255|min:3',
            'giver' => 'required|string|max:15|min:3',
            'entryDate' => 'required|date_format:d/m/Y|before_or_equal:today',
        ];

        if($this->method() == 'PUT'){
            $rules['isbn'] .= ",{$this->book}";
        }
        return $rules;
    }

    public function messages()
    {
        $messages = [
            'isbn:required' => 'Digite o ISBN',
            'isbn:unique' => 'Este código o ISBN já existe',

            'title:min:1' => 'O titulo precisa ter no mínimo 3 caracteres',
            'title:max:255' => 'O titulo precisa ter no maximo 255 caracteres',

            'author:min:3' => 'O autor precisa ter no mínimo 3 caracteres',
            'author:max:255' => 'O autor precisa ter no maximo 255 caracteres',

            'giver:min:3' => 'O doador precisa ter no mínimo 3 caracteres',
            'giver:min:255' => 'O doador precisa ter no maximo 255 caracteres',

            'entryDate:required:' => 'Digite a data de entrada',
            'entryDate:after_or_equal'.today()->format('d/m/Y') => 'Selecione uma data anterior ou igual a hoje',
        ];
        return $messages;
    }
}
