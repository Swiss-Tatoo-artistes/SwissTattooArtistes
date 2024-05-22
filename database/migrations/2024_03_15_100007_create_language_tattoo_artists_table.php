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
        Schema::create('languages_tattoo_artists', function (Blueprint $table) {
            $table->foreignId('tattoo_artist_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('language_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('languages_tattoo_artists', function (Blueprint $table) {
            $table->dropForeign(['tattoo_artist_id']);
            $table->dropForeign(['language_id']);
        });
        Schema::dropIfExists('languages_tattoo_artists');
    }
};
