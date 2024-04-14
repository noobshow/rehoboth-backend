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
        Schema::table('funded_accounts', function (Blueprint $table) {
            // First, drop the existing integer 'level' column
            // Note: Dropping or modifying columns requires Doctrine DBAL; ensure it's installed
            $table->dropColumn('level');
        });

        // After dropping the column, we need to add it again as a string
        Schema::table('funded_accounts', function (Blueprint $table) {
            $table->string('level')->default('Phase 1')->after('funded_amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('funded_accounts', function (Blueprint $table) {
            // To revert the changes, drop the string 'level' column
            $table->dropColumn('level');
        });

        // And then add back the integer 'level' column
        Schema::table('funded_accounts', function (Blueprint $table) {
            $table->integer('level')->default(1)->after('funded_amount');
        });
    }
};