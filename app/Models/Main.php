<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    protected $fillable = [
        "image",
        "specifics",
    ];

    protected $casts = [
        'specifics' => 'array',
    ];

    public function getSpecificsAttribute($value)
    {
        return json_decode($value, true) ?: []; // Десериализуем JSON, возвращаем пустой массив, если ошибка
    }
}
