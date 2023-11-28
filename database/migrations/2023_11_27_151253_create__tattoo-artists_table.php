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
        Schema::create('_tattoo-artists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('_users');
            $table->string('user_name', 50);
            $table->string('email')->unique();
            $table->text('password');
            $table->integer('phone');
            $table->enum('role', ['admin', 'user', 'tattoo', 'superadmin'])->default('user');
            $table->string('licenseNumber', 50);
            $table->string('formation', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
