<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        "image",
        "name",
        "title",
        "description",
        "image2",
        "name2",
        "title2",
        "description2",
        "image3",
        "name3",
        "title3",
        "description3",
    ];
}
