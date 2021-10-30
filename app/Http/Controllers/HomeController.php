<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderedBooks;
use App\Models\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(auth()->user()->role === "admin") {
            return view('admin.home');
        } else if(auth()->user()->role === "user") {
            $listbooks = [];
            if (OrderedBooks::find(Auth()->user()->id)) {
                $books = OrderedBooks::find(Auth()->user()->id)->get();
                if (count($books)) {
                    foreach ($books as $key => $value) {
                        array_push($listbooks, Book::where('id', $value['book_id'])->get());
                    }
                }
                return view('home', compact('listbooks'));
            } else {
                return view('home', compact('listbooks'));
            }
        } else {
            return view('welcome');
        }
        
    }
}
