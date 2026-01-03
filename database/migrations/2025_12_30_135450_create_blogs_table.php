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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->json('title'); // {en: '', ar: ''}
            $table->json('content'); // {en: '', ar: ''}
            $table->json('excerpt')->nullable(); // {en: '', ar: ''}
            $table->json('category'); // {en: '', ar: ''}
            $table->string('image');
            $table->string('author_name')->nullable();
            $table->string('author_role')->nullable();
            $table->string('author_image')->nullable();
            $table->date('published_date')->nullable();
            $table->string('video_url')->nullable();
            $table->json('tags')->nullable(); // [{en: '', ar: ''}, ...]
            $table->integer('order')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
