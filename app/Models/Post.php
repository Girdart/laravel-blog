<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Post extends Model
{
    // Разрешаем массовое заполнение этих полей через Post::create()

    use HasFactory;  // подключает фабрики
    protected $fillable = ['title', 'content'];
}
