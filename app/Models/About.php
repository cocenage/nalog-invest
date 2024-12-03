<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        "image",
        "specifics",
        "name",
        "statistics",
    ];

    protected $casts = [
        'specifics' => 'array',
        'statistics' => 'array'
    ];

    public function getSpecificsAttribute($value)
    {
        return json_decode($value, true) ?: []; // Десериализуем JSON, возвращаем пустой массив, если ошибка
    }
}
