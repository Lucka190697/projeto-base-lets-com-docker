<?php

namespace App\Http\Requests;

use App\Enums\UserRolesEnum;
use Illuminate\Foundation\Http\FormRequest;
use DateTime;
use Carbon\Carbon;

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
        $rules = [
            'loans_date' => 'required|date_format:d/m/Y|before_or_equal:' . today()->format('d/m/Y'),
            'return_date' => 'required|date_format:d/m/Y|after_or_equal:loans_date',
            'book_id' => 'required|integer|max:255|min:1',
        ];

        if(current_user()->hasRole(UserRolesEnum::ADMIN))
            $rules['user_id'] = "required|integer|max:255|min:1";
        return $rules;

    }
}