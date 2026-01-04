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
        Schema::create('footer_settings', function (Blueprint $table) {
            $table->id();
            $table->json('footer_title')->nullable();
            $table->json('footer_description')->nullable();
            $table->string('footer_email')->nullable();
            $table->string('footer_phone')->nullable();
            $table->text('footer_address')->nullable();
            $table->json('footer_address_text')->nullable();
            $table->string('footer_facebook')->nullable();
            $table->string('footer_twitter')->nullable();
            $table->string('footer_dribbble')->nullable();
            $table->string('footer_instagram')->nullable();
            $table->string('footer_copyright_text')->nullable();
            $table->json('footer_terms_text')->nullable();
            $table->json('footer_privacy_text')->nullable();
            $table->string('footer_terms_url')->nullable();
            $table->string('footer_privacy_url')->nullable();
            $table->string('footer_logo_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_settings');
    }
};
