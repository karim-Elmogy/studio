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
        Schema::create('contact_page_settings', function (Blueprint $table) {
            $table->id();
            $table->json('hero_subtitle'); // العنوان الفرعي
            $table->json('hero_title'); // العنوان الرئيسي
            $table->json('hero_description')->nullable(); // الوصف
            $table->json('scroll_text')->nullable(); // نص التمرير
            $table->json('map_text')->nullable(); // نص الخريطة
            $table->json('studios_text')->nullable(); // نص استوديوهات
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_page_settings');
    }
};
