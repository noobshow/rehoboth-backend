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
        Schema::table('c_d_l_signals', function (Blueprint $table) {
            $table->string('cdl_clr')->nullable();
            $table->string('bias_clr')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('c_d_l_signals', function (Blueprint $table) {
            //
            $table->dropColumn('cdl_clr');
            $table->dropColumn('bias_clr');
        });
    }
};
