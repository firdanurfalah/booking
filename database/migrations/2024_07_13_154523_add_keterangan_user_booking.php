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
        if (!Schema::hasColumn('booking', 'keterangan_user')) {
            Schema::table('booking', function (Blueprint $table) {
                $table->text('keterangan_user')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('booking', 'keterangan_user')) {
            Schema::table('booking', function (Blueprint $table) {
                $table->dropColumn('keterangan_user');
            });
        }
    }
};
