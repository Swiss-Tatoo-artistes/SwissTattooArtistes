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
        Schema::create('styles_tattoo_artists', function (Blueprint $table) {
            $table->foreignId('tattoo_artist_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('style_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('styles_tattoo_artists', function (Blueprint $table) {
            $table->dropForeign(['tattoo_artist_id']);
            $table->dropForeign(['style_id']);
        });
    
        Schema::dropIfExists('styles_tattoo_artists');
    }
    
};
