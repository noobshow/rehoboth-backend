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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('role')->default('user');
        });

        // Create first admin user
        $admin = new \App\Models\User();
        $admin->name = 'Admin';
        $admin->email = 'admin@rehobothtraders.com';
        $admin->password = \Illuminate\Support\Facades\Hash::make('OluwatosinRosiji10####');
        $admin->role = 'admin';
        $admin->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('role');
        });
    }
};
