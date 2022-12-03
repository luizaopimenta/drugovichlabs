<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Manager extends Model
{
    use HasApiTokens, HasFactory ;

    protected $fillable = [
        "name",
        "email",
        "password",
        "level",
        "created_at",
        "updated_at"
    ];

    protected $hidden = [
        'password',
    ];



}
