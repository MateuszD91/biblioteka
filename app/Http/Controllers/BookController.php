<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book as Book;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $data = array( 'books' => $books );

        return view('books', $data );
    }

    public function edit(Request $request)
    {
        $book = Book::find($request->id);
        $data = array( 'book' => $book );

        return view('edit', $data );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $book = new Book;

        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->save();

        return redirect('/');
    }

    public function delete(Request $request)
    {
        $book = Book::find($request->id);
        $book->delete();

        return redirect('/');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $book = Book::find($request->id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    

    }
}
