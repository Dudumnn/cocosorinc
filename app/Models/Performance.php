<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    public function scopeSearch($query, $value){
        $query->where('name', 'like', "%{$value}%");
    }
    protected $table = 'output';

    protected $fillable = [
        'name',
        'date',
        'output',
    ];
}
