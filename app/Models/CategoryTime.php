<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTime extends Model
{
    public function Detail(){
        return $this->hasMany(Detail::class);
    }
    use HasFactory;
}
