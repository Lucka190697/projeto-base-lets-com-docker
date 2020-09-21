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

    public function dateTreatment($data)
    {
        $date = DateTime::createFromFormat('d/m/Y', $data['entryDate']);
        $data['entryDate'] = $date->format('Y-m-d H:m:s');
//        $data['entryDate'] = date('Y-m-d H:i:s', strtotime($data['entryDate']));
        return $data;
    }
}
