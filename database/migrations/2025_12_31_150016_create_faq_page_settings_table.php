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
        Schema::create('faq_page_settings', function (Blueprint $table) {
            $table->id();
            $table->json('hero_subtitle'); // العنوان الفرعي
            $table->json('hero_title'); // العنوان الرئيسي
            $table->json('hero_description')->nullable(); // الوصف
            $table->json('scroll_text')->nullable(); // نص التمرير
            $table->json('cta_title')->nullable(); // عنوان CTA
            $table->json('cta_description')->nullable(); // وصف CTA
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq_page_settings');
    }
};
