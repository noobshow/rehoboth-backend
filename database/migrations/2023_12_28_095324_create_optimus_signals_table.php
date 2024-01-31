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
        // Create a new table
        Schema::create('optimus_signals', function (Blueprint $table) {
            $table->id();
            $table->string('asset');
            $table->string('range')->nullable();
            $table->string('fundamental')->nullable();
            $table->string('technical')->nullable();
            $table->string('sentiment')->nullable();
            $table->string('strategy')->nullable();
            $table->string('volt')->nullable();
            // colors
            $table->string('asset_clr')->nullable();
            $table->string('fundamental_clr')->nullable();
            $table->string('technical_clr')->nullable();
            $table->string('sentiment_clr')->nullable();
            $table->string('strategy_clr')->nullable();
            $table->string('volt_clr')->nullable();
            $table->timestamps();
        });

        // Define the order of assets
        $order = [
            "eurusd",
            "gbpusd",
            "chfjpy",
            "cadjpy",
            "cadchf",
            "nzdjpy",
            "nzdchf",
            "nzdcad",
            "audjpy",
            "audchf",
            "audcad",
            "audnzd",
            "eurjpy",
            "eurchf",
            "eurcad",
            "eurnzd",
            "euraud",
            "gbpjpy",
            "gbpchf",
            "gbpcad",
            "gbpnzd",
            "gbpaud",
            "eurgbp",
            "usdjpy",
            "usdchf",
            "usdcad",
            "nzdusd",
            "audusd"
        ];

        // Insert the records in the desired order
        foreach ($order as $asset) {
            $table = new \App\Models\OptimusSignal();
            $table->asset = $asset;
            $table->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('optimus_signals');
    }
};
