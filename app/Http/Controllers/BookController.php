<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show(){
        $books = Book::orderBy('waktuupdate','asc')->get();
        return view('Homepage',compact('books'));
    }
}
