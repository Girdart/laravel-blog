<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();  // автоинкрементный идентификатор
            $table->string('title'); // колонка для заголовка
            $table->text('content'); // колонка для содержимого
            $table->timestamps(); // создаёт created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts'); // удаляет таблицу, если нужно откатить миграцию
    }
};
