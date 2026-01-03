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
        Schema::create('blog_page_settings', function (Blueprint $table) {
            $table->id();
            $table->json('hero_subtitle'); // العنوان الفرعي
            $table->json('hero_title'); // العنوان الرئيسي
            $table->string('hero_background_image')->nullable(); // صورة الخلفية
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_page_settings');
    }
};
