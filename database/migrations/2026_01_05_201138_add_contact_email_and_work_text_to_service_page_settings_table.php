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
        Schema::table('service_page_settings', function (Blueprint $table) {
            $table->string('contact_email')->nullable()->after('hero_subtitle'); // البريد الإلكتروني للتواصل
            $table->json('recent_work_text')->nullable()->after('banner_image'); // نص "أعمالنا الحديثة"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_page_settings', function (Blueprint $table) {
            $table->dropColumn(['contact_email', 'recent_work_text']);
        });
    }
};
