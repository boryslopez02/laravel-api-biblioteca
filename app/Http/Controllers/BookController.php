<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::simplePaginate(6);

        return view('library-user', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $new = new Book();
        $new->title = $request->title;
        $new->publisher = $request->publisher;
        $new->category = $request->category;
        $new->content = $request->content;
        $new->content_short = $request->content_short;
        $new->author = $request->author;
        $new->img_small = $request->img_small;
        $new->img_big = $request->img_big;
        $new->language = $request->language;
        $new->page_nums = $request->page_nums;
        $new->url_details = $request->url_details;
        $new->url_download = $request->url_download;
        $new->publication_date = $request->publication_date;

        $new->save();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($book)
    {
        $findbook = Book::findOrFail($book);
        return view('book-info', compact('findbook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    public function destroy($book)
    {
        Book::destroy($book);
        return back();
    }
}
