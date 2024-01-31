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
        Schema::create('trade_blotters', function (Blueprint $table) {
            $table->id();
            $table->string("asset");
            $table->string("time");
            $table->string("size");
            $table->string("price");
            $table->string("sl");
            $table->string("tp");
            $table->string("pl");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trade_blotters');
    }
};
