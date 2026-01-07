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
        Schema::create('project_page_settings', function (Blueprint $table) {
            $table->id();
            $table->json('hero_subtitle'); // النص الفرعي في قسم البطل
            $table->json('hero_title'); // العنوان الرئيسي
            $table->string('hero_background_image')->nullable(); // صورة خلفية قسم البطل
            $table->string('avatar_image')->nullable(); // صورة الأفاتار
            $table->string('avatar_number')->nullable(); // الرقم (مثل 2500+)
            $table->json('avatar_text'); // النص بجانب الأفاتار
            $table->json('button_text'); // نص الزر
            $table->string('button_url')->nullable(); // رابط الزر
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_page_settings');
    }
};
