<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author',
        'minimum_age',
        'release_year',
        'publisher',
    ];
}
