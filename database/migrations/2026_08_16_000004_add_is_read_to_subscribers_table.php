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
        if (Schema::hasTable('subscribers') && !Schema::hasColumn('subscribers', 'is_read')) {
            Schema::table('subscribers', function (Blueprint $table) {
                $table->boolean('is_read')->default(false)->after('is_active');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('subscribers') && Schema::hasColumn('subscribers', 'is_read')) {
            Schema::table('subscribers', function (Blueprint $table) {
                $table->dropColumn('is_read');
            });
        }
    }
};
