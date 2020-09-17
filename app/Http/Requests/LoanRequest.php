<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanRequest extends FormRequest
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
            'loans_date' => 'required|string|max:18|min:10|before_or_equal:'. today()->format('d/m/Y'),
            'return_date' => 'required|string|max:18|min:10|after_or_equal:loans_date|before_or_equal:'. today()->format('d/m/Y'),
            'book_id' => 'required|integer|max:255|min:1',
        ];
        return $rules;
    }

    public function messages()
    {
        $messages = [
            'loans_date:required' => 'Digite a data do empréstimo',
            'return_date:required' => 'Digite a data da devolução',
            'loans_date:before_or_equal:'. today()->format('d/m/Y') => 'Selecione uma data anterior a de hoje',
            'return_date:after_or_equal:loans_date' => 'Selecione uma data posterior a data de empréstimo',
            'return_date:before_or_equal:' . today()->format('d/m/Y') => 'Selecione uma data posterior a hoje',
            'book_id:required' => 'Selecione um Livro',
        ];
        return $messages;
    }
}
