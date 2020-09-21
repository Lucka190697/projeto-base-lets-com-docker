<?php

namespace App\Http\Resources;

use App\Enums\UserRolesEnum;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'isbn' => $this->isbn,
            'title' => $this->title,
            'author' => $this->author,
            'giver' => $this->giver,
            'user_id' => $this->user->name,
            'entryDate' => format_date($this->entryDate, 'd/m/Y'),
            'thumbnail' => $this->thumbnail,
            'created_at' => format_date($this->created_at),

            'links' => [
                'edit' => $this->when($this->getPermissions(), route('books.edit', $this->id)),
                'show' => $this->when(true, route('books.show', $this->id)),
                'destroy' => $this->when($this->getPermissions(), route('books.destroy', $this->id)),
            ],
        ];
    }

    private function getPermissions()
    {
        return current_user()->hasRole(UserRolesEnum::ADMIN) ?? !$this->loan->id;
    }
}
