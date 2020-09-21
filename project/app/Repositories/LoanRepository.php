<?php

namespace App\Repositories;

use App\Models\Loan;
use Carbon\Carbon;

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
