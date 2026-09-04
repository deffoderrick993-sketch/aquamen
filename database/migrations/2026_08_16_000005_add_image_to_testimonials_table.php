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
        if (Schema::hasTable('testimonials') && !Schema::hasColumn('testimonials', 'image')) {
            Schema::table('testimonials', function (Blueprint $table) {
                $table->string('image')->nullable()->after('role_title');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('testimonials') && Schema::hasColumn('testimonials', 'image')) {
            Schema::table('testimonials', function (Blueprint $table) {
                $table->dropColumn('image');
            });
        }
    }
};
