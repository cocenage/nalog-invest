<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "title",
        "description",
        "specifics",
        "price",
        "is_active",
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'specifics' => 'array'
    ];

    public function getSpecificsAttribute($value)
    {
        return json_decode($value, true) ?: []; // Десериализуем JSON, возвращаем пустой массив, если ошибка
    }
}
