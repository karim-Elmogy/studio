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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->json('title'); // {en: '', ar: ''}
            $table->json('description')->nullable(); // {en: '', ar: ''}
            $table->json('category'); // {en: '', ar: ''}
            $table->string('image');
            $table->string('client')->nullable();
            $table->string('year')->nullable();
            $table->json('tags')->nullable(); // [{en: '', ar: ''}, ...]
            $table->string('type')->default('web'); // web, mobile
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
        Schema::dropIfExists('projects');
    }
};
