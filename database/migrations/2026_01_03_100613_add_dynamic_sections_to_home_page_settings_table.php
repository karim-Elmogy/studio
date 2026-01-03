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
        Schema::table('home_page_settings', function (Blueprint $table) {
            // Projects Section
            $table->json('projects_subtitle')->nullable();
            $table->json('projects_title')->nullable();
            $table->json('projects_button_text')->nullable();
            $table->string('projects_button_url')->nullable();

            // Services Section
            $table->json('services_subtitle')->nullable();
            $table->json('services_title')->nullable();
            $table->json('services_button_text')->nullable();
            $table->string('services_button_url')->nullable();

            // Choose Section
            $table->json('choose_title')->nullable();
            $table->string('choose_image')->nullable();

            // Testimonials Section
            $table->json('testimonials_subtitle')->nullable();
            $table->json('testimonials_title')->nullable();
            $table->json('testimonials_button_text')->nullable();
            $table->string('testimonials_button_url')->nullable();

            // Brand Section 2 (Sharing the love)
            $table->json('brand_subtitle')->nullable();
            $table->json('brand_title')->nullable();
            $table->json('brand_button_text')->nullable();
            $table->string('brand_button_url')->nullable();

            // Achievements/Stats
            $table->json('achievement1_text')->nullable();
            $table->string('achievement1_icon')->nullable();
            $table->json('achievement2_text')->nullable();
            $table->string('achievement2_icon')->nullable();
            $table->json('achievement3_text')->nullable();
            $table->string('achievement3_icon')->nullable();
            $table->json('achievement4_text')->nullable();
            $table->string('achievement4_icon')->nullable();

            // Blog Section
            $table->json('blog_subtitle')->nullable();
            $table->json('blog_title')->nullable();
            $table->json('blog_button_text')->nullable();
            $table->string('blog_button_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_page_settings', function (Blueprint $table) {
            $table->dropColumn([
                'projects_subtitle', 'projects_title', 'projects_button_text', 'projects_button_url',
                'services_subtitle', 'services_title', 'services_button_text', 'services_button_url',
                'choose_title', 'choose_image',
                'testimonials_subtitle', 'testimonials_title', 'testimonials_button_text', 'testimonials_button_url',
                'brand_subtitle', 'brand_title', 'brand_button_text', 'brand_button_url',
                'achievement1_text', 'achievement1_icon', 'achievement2_text', 'achievement2_icon',
                'achievement3_text', 'achievement3_icon', 'achievement4_text', 'achievement4_icon',
                'blog_subtitle', 'blog_title', 'blog_button_text', 'blog_button_url'
            ]);
        });
    }
};
