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
        Schema::create('_appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')
                ->on('_users');
            $table->unsignedBigInteger('tattoo_artist');
            $table->foreign('tattoo_artist')->references('id')
                ->on('_tattoo-artists');
            $table->enum('type', ['tattoo', 'piercing'])->default('tattoo');
            $table->string('appointment_date', 50);
            $table->string('appointment_turn', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_appointments');
    }
};
