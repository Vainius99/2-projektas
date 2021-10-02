<?php

namespace App\Http\Controllers;

use App\Models\Book_items;
use Illuminate\Http\Request;

class BookItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookitems = Book_items::all();
        return view("bookitem.index",['bookitems' =>$bookitems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookitem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookitem = new Book_items();
        $bookitem->title = $request->bookitem_title;
        $bookitem->bookcode = $request->bookitem_bookcode;
        $bookitem->pages = $request->bookitem_pages;
        $bookitem->descrioption = $request->bookitem_descrioption;
        $bookitem->author_id = $request->bookitem_author_id;

        $bookitem->save();

        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book_items  $book_items
     * @return \Illuminate\Http\Response
     */
    public function show(Book_items $book_items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book_items  $book_items
     * @return \Illuminate\Http\Response
     */
    public function edit(Book_items $book_items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book_items  $book_items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book_items $book_items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book_items  $book_items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book_items $book_items)
    {
        //
    }
}
