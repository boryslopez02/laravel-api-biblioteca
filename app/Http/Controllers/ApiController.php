<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Book;

class ApiController extends Controller
{
    public function index()
    {
        $books = Book::take(6)->get();
        
        return view('welcome', compact('books'));
    }
}
