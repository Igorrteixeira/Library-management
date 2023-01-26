<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre_id',
        'book_name',
        'author',
        'available',
        'book_registration',
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function loan()
    {
        return $this->hasMany(BookLoan::class);
    }
}
