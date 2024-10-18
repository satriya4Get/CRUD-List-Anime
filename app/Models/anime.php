<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'rating',
        'genre',
        'description',
        'image',
    ];
}
