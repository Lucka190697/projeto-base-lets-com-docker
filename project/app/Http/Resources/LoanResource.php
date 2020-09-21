<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'loans_date' => format_date($this->loans_date, 'd/m/Y'),//$this->loans_date
            'return_date' => format_date($this->return_date, 'd/m/Y'),//format_date($this->created_at),
            'is_loan' => $this->is_loan ? __('labels.loans.borrowed') : __('labels.loans.available'),
            'user_id' => $this->user_id,
            'book_id' => $this->book_id,

            'links' => [
                'edit' => $this->when(true, route('loans.edit', $this->id)),
                'show' => $this->when(true, route('loans.show', $this->id)),
                'destroy' => $this->when(true, route('loans.destroy', $this->id)),
            ],
        ];
    }
}
