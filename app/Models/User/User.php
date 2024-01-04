<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;
    protected $table = "mobileUsers";
    protected $fillable = [
        'name',
        'username',
        'password'
    ];
    protected $guarded = ['id'];
}
