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
        Schema::create('service_page_settings', function (Blueprint $table) {
            $table->id();
            $table->json('hero_title'); // العنوان الرئيسي في قسم البطل
            $table->json('hero_subtitle'); // العنوان الفرعي
            $table->string('hero_image')->nullable(); // صورة الخلفية
            $table->json('banner_text')->nullable(); // نص البانر
            $table->string('banner_image')->nullable(); // صورة البانر
            $table->json('slider_text')->nullable(); // نص السلايدر السفلي
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_page_settings');
    }
};
