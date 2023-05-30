<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookGroup extends Model
{
    public function Book(){
        return $this->hasMany(Book::class);
    }
    use HasFactory;
}
