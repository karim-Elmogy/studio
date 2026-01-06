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
        Schema::table('services', function (Blueprint $table) {
            // Hero section details
            $table->json('hero_subtitle')->nullable(); // {en: '', ar: ''}
            $table->json('hero_title')->nullable(); // {en: '', ar: ''}
            $table->json('hero_description')->nullable(); // {en: '', ar: ''}
            $table->string('hero_image')->nullable();

            // Process section details
            $table->json('process_title')->nullable(); // {en: '', ar: ''}
            $table->json('process_steps')->nullable(); // [{en: '', ar: ''}, ...]
            $table->json('process_description')->nullable(); // {en: '', ar: ''}
            $table->string('process_image')->nullable();

            // Benefits section
            $table->json('benefits_title')->nullable(); // {en: '', ar: ''}
            $table->json('benefits_description')->nullable(); // {en: '', ar: ''}

            // Features section
            $table->json('features_title')->nullable(); // {en: '', ar: ''}
            $table->string('features_image')->nullable();

            // Gallery images (multiple images for the service)
            $table->json('gallery_images')->nullable(); // ['image1.jpg', 'image2.jpg', ...]
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'hero_subtitle',
                'hero_title',
                'hero_description',
                'hero_image',
                'process_title',
                'process_steps',
                'process_description',
                'process_image',
                'benefits_title',
                'benefits_description',
                'features_title',
                'features_image',
                'gallery_images'
            ]);
        });
    }
};
