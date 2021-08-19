<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'publisher_id',
        'name',
        'description',
        'quantity',
        'status',
    ];

    public function categories()
    {
        return $this->belongsToMany(Book::class, 'book_category', 'book_id', 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function requestBorrows()
    {
        return $this->hasMany(Borrow::class);
    }

    public function follows()
    {
        return $this->morphMany(Follow::class, 'followable');
    }
}
