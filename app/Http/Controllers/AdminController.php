<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Book;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saves = Book::all();

        $booklist1 = Http::get('https://www.etnassoft.com/api/v1/get/?category=cine');
        $booklist2 = Http::get('https://www.etnassoft.com/api/v1/get/?category=marketing_y_business');
        $booklist3 = Http::get('https://www.etnassoft.com/api/v1/get/?category=educacion-biblioteca');

        $arr1 = $booklist1->json();
        $arr2 = $booklist2->json();
        $arr3 = $booklist3->json();
        
        return view('admin.library', compact('arr1', 'arr2', 'arr3'));
    }

    public function storedBooks()
    {
        $books = Book::simplePaginate(6);
        
        return view('admin.stored-books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
