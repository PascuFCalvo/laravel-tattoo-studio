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
        Schema::create('_users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 50);
            $table->string('email')->unique();
            $table->text('password');
            $table->integer('phone');
            $table->enum('role', ['admin', 'user','tattoo', 'superadmin'])->default('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_users');
    }
};
