<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $table = "user";
    protected $primaryKey = "id";
    protected $fillable = [
        'email',
        'level',
        'password',
    ];

protected $hidden= [
    'password',
    // 'remember_token',
];

protected $casts =[
    'email_verified_at'=>'datetime',
];
}
