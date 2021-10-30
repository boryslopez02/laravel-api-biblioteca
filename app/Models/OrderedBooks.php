<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedBooks extends Model
{
    use HasFactory;

    protected $table = 'ordered_books';
}
