<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function BookGroup(){
        return $this->belongsTo(BookGroup::class);
    }

    public function Detail(){
        return $this->hasOne(Detail::class);
    }
    use HasFactory;
}
