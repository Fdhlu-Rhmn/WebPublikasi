<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'writer',
        'size_book',
        'book_page',
        'years',
        'isbn',
        'image_featured',
        'tag',
    ];
}