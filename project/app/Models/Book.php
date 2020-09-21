<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\Search as SearchScope;

class Book extends Model
{
    use SearchScope;

    protected $fillable = [
        'isbn',
        'title',
        'author',
        'giver',
        'entryDate',
        'user_id',
    ];

    protected $searchBy = [
        'isbn', 'title', 'author', 'giver',
    ];

    public function loan()
    {
        return $this->hasOne(Loan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setEntryDateAttribute($value)
    {
        $this->attributes['entryDate'] = format_carbon($value, 'd/m/Y');
    }
}
