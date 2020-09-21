<?php

namespace App\Http\Resources;

use App\Enums\UserRolesEnum;
use Illuminate\Http\Resources\Json\JsonResource;

class LoanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'loans_date' => format_date($this->loans_date, 'd/m/Y'),
            'return_date' => format_date($this->return_date, 'd/m/Y'),
            'is_loan' => $this->is_loan ? __('labels.loans.available') : __('labels.loans.borrowed'),
            'user_id' => $this->user->name,
            'book_id' => $this->book->title,

            'links' => [
                'edit' => $this->when(current_user()->hasRole(UserRolesEnum::ADMIN), route('loans.edit', $this->id)),
                'show' => $this->when(true, route('loans.show', $this->id)),
                'destroy' => $this->when($this->getPermissions(), route('loans.destroy', $this->id)),
            ],
        ];
    }

    private function getPermissions()
    {
        return current_user()->id == $this->user->id;
    }
}
