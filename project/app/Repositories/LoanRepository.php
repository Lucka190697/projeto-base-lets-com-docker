<?php

namespace App\Repositories;

use App\Models\Book;
use App\Models\Loan;

class LoanRepository extends Repository
{
    protected function getClass()
    {
        return Loan::class;
    }

    public function dateTreatment($data)
    {
        $data['loans_date'] = date('Y-m-d H:i:s', strtotime($data['loans_date']));//2020-08-03 21:30:00
        $data['return_date'] = date('Y-m-d H:i:s', strtotime($data['return_date']));//2020-08-03 21:30:00
        return $data;
    }

    public function user_id($data)
    {
        $data['user_id'] = auth()->user()->id;
        return $data;
    }

    public function foreignTreatment($data)
    {
        $data['book_id'] = (int)$data['book_id'];
        $data['is_loan'] = true;
        return $data;
    }
}
