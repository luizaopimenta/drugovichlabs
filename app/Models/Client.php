<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "cnpj",
        "foundationDate",
        "idGroup",
        "created_at",
        "updated_at",
    ];
}
