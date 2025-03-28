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
        Schema::create('news_data', function (Blueprint $table) {
            // $table->id();
            $table->string('time')->nullable();
            $table->string('pair')->nullable();
            $table->string('event')->nullable();
            $table->string('actual')->nullable();
            $table->string('forecast')->nullable();
            $table->string('previous')->nullable();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_data');
    }
};
