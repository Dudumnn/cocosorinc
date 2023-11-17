<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    public function scopeSearch($query, $value){
        $query->where('name', 'like', "%{$value}%")->orWhere('middle_name', 'like', "%{$value}%");
    }
}
