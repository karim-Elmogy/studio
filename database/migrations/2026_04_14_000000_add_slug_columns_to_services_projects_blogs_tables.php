<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('slug_ar')->nullable()->after('id')->unique();
            $table->string('slug_en')->nullable()->after('slug_ar')->unique();
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->string('slug_ar')->nullable()->after('id')->unique();
            $table->string('slug_en')->nullable()->after('slug_ar')->unique();
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug_ar')->nullable()->after('id')->unique();
            $table->string('slug_en')->nullable()->after('slug_ar')->unique();
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropUnique(['slug_ar']);
            $table->dropUnique(['slug_en']);
            $table->dropColumn(['slug_ar', 'slug_en']);
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropUnique(['slug_ar']);
            $table->dropUnique(['slug_en']);
            $table->dropColumn(['slug_ar', 'slug_en']);
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->dropUnique(['slug_ar']);
            $table->dropUnique(['slug_en']);
            $table->dropColumn(['slug_ar', 'slug_en']);
        });
    }
};
