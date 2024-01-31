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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('identifier')->unique;
            $table->string('stripe_id')->unique;
            $table->timestamps();
        });

        // Create plans
        $plans = [
            [
                'title' => 'OptimusPro Weekly',
                'identifier' => 'optimuspro-weekly',
                'stripe_id' => 'price_1ORtFlAn1xoZ5dqVxvMkRjLZ'
            ],
            [
                'title' => 'OptimusPro Monthly',
                'identifier' => 'optimuspro-monthly',
                'stripe_id' => 'price_1ORtEVAn1xoZ5dqVPIHrfeRi'
            ],
            [
                'title' => 'OptimusPro Bi-Annually',
                'identifier' => 'optimuspro-bi-annually',
                'stripe_id' => 'price_1ORtFQAn1xoZ5dqVKY1IV4Xo'
            ],
            [
                'title' => 'Get Funded 80k',
                'identifier' => 'get-funded-80k',
                'stripe_id' => 'price_1ORt7EAn1xoZ5dqVESFc8msu'
            ],
            [
                'title' => 'Get Funded 60k',
                'identifier' => 'get-funded-60k',
                'stripe_id' => 'price_1ORt7EAn1xoZ5dqV59k71cds'
            ],
            [
                'title' => 'Get Funded 40k',
                'identifier' => 'get-funded-40k',
                'stripe_id' => 'price_1ORt7EAn1xoZ5dqV0Pu7paIf'
            ],
            [
                'title' => 'Get Funded 20k',
                'identifier' => 'get-funded-20k',
                'stripe_id' => 'price_1ORt7EAn1xoZ5dqVmnjznDue'
            ]
        ];

        // Insert plans
        foreach ($plans as $data) {
            $plan = new App\Models\Plans();
            $plan->title = $data['title'];
            $plan->identifier = $data['identifier'];
            $plan->stripe_id = $data['stripe_id'];
            $plan->save();
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
