<?php

namespace App\Http\Controllers;

use App\Models\CategoryTime;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show($idCategory){
        $category = Detail::find($idCategory);
        return view('Detail',compact('category'));
    }
}
