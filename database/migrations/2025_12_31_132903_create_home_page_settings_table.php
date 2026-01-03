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
        Schema::create('home_page_settings', function (Blueprint $table) {
            $table->id();
            $table->json('hero_title'); // العنوان الرئيسي
            $table->json('hero_description')->nullable(); // الوصف
            $table->string('hero_video_url')->nullable(); // رابط الفيديو
            $table->json('hero_button1_text')->nullable(); // نص الزر الأول
            $table->string('hero_button1_url')->nullable(); // رابط الزر الأول
            $table->json('hero_button2_text')->nullable(); // نص الزر الثاني
            $table->string('hero_button2_url')->nullable(); // رابط الزر الثاني
            $table->json('about_subtitle')->nullable(); // العنوان الفرعي لقسم من نحن
            $table->json('about_description')->nullable(); // وصف من نحن
            $table->json('about_button_text')->nullable(); // نص زر من نحن
            $table->string('about_button_url')->nullable(); // رابط زر من نحن
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_settings');
    }
};
