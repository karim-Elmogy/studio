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
            $table->json('hero_info_text')->nullable()->after('hero_subtitle'); // نص معلومات البطل
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_page_settings', function (Blueprint $table) {
            $table->dropColumn('hero_info_text');
        });
    }
};
