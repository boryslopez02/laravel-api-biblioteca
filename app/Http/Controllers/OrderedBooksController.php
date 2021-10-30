<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\OrderedBooks;
use Illuminate\Http\Request;

class OrderedBooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $new = new OrderedBooks();
        $new->user_id = Auth()->user()->id;
        $new->book_id = $request->id;
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderedBooks  $orderedBooks
     * @return \Illuminate\Http\Response
     */
    public function show(OrderedBooks $orderedBooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderedBooks  $orderedBooks
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderedBooks $orderedBooks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderedBooks  $orderedBooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderedBooks $orderedBooks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderedBooks  $orderedBooks
     * @return \Illuminate\Http\Response
     */
    public function destroy($book)
    {
        OrderedBooks::destroy($book);
        return back();
    }
}
