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
            $table->string('bg_image_1')->nullable()->after('slider_text');
            $table->string('bg_image_2')->nullable()->after('bg_image_1');
            $table->string('bg_image_3')->nullable()->after('bg_image_2');
            $table->string('bg_image_4')->nullable()->after('bg_image_3');
            $table->string('bg_image_5')->nullable()->after('bg_image_4');
            $table->string('bg_image_6')->nullable()->after('bg_image_5');
            $table->string('bg_image_7')->nullable()->after('bg_image_6');
            $table->string('bg_image_8')->nullable()->after('bg_image_7');
            $table->string('bg_image_9')->nullable()->after('bg_image_8');
            $table->string('bg_image_10')->nullable()->after('bg_image_9');
            $table->string('bg_image_11')->nullable()->after('bg_image_10');
            $table->string('bg_image_12')->nullable()->after('bg_image_11');
            $table->string('bg_image_13')->nullable()->after('bg_image_12');
            $table->string('bg_image_14')->nullable()->after('bg_image_13');
            $table->string('bg_image_15')->nullable()->after('bg_image_14');
            $table->string('bg_image_16')->nullable()->after('bg_image_15');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_page_settings', function (Blueprint $table) {
            $table->dropColumn([
                'bg_image_1', 'bg_image_2', 'bg_image_3', 'bg_image_4',
                'bg_image_5', 'bg_image_6', 'bg_image_7', 'bg_image_8',
                'bg_image_9', 'bg_image_10', 'bg_image_11', 'bg_image_12',
                'bg_image_13', 'bg_image_14', 'bg_image_15', 'bg_image_16'
            ]);
        });
    }
};
