<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\Search as SearchScope;

class Loan extends Model
{
    use SearchScope;

    protected $fillable = [
        'loans_date',
        'return_date',
        'is_loan',
        'user_id',
        'book_id',
    ];

    protected $searchBy = [
        'loans_date', 'return_date', 'user_id', 'book_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function setLoansDateAttribute($value)
    {
        $this->attributes['loans_date'] = format_carbon($value, 'd/m/Y');
    }

    public function setReturnDateAttribute($value)
    {
        $this->attributes['return_date'] = format_carbon($value, 'd/m/Y');
    }
}
