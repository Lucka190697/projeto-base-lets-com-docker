<?php

namespace App\Repositories;

use App\Models\Book;
use App\Models\Loan;
use DateTime;

class LoanRepository extends Repository
{
    protected function getClass()
    {
        return Loan::class;
    }

    public function user_id($data)
    {
        $data['user_id'] = auth()->user()->id;
        return $data;
    }
}
