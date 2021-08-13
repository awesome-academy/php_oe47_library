<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function follows()
    {
        return $this->morphMany(Follow::class, 'followable');
    }
}
