<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sched extends Model
{
    use HasFactory;

    public function scopeSearch($query, $value){
        $query->where('start_date', 'like', "%{$value}%")->orWhere('end_date', 'like', "%{$value}%");
    }
    protected $table = 'schedules';

    protected $fillable = [
        'shift',
        'time_in',
        'time_out',
        'start_date',
        'end_date',
    ];
}
