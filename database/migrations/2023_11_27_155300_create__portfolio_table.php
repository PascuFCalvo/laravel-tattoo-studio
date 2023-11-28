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
        Schema::create('_portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('potfolio_name', 50);
            $table->unsignedBigInteger('tattoo_artist');
            $table->foreign('tattoo_artist')->references('id')->on('_tattoo-artists');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_portfolio');
    }
};
