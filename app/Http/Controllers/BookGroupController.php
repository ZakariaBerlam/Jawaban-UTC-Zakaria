<?php

namespace App\Http\Controllers;

use App\Models\BookGroup;
use Illuminate\Http\Request;

class BookGroupController extends Controller
{
    public function show($idCategory){
        $category = BookGroup::find($idCategory)->Book;
        return view('Group',compact('category'));
    }
}
