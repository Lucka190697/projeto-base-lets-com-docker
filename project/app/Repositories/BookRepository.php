<?php

namespace App\Repositories;

use App\Models\Book;
use DateTime;

class BookRepository extends Repository
{
    protected function getClass()
    {
        return Book::class;
    }

    public function user_id($data)
    {
        $data['user_id'] = auth()->user()->id;
        return $data;
    }
}
