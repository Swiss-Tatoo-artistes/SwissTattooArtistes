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
        Schema::create('openings_time', function (Blueprint $table) {
            $table->id();
            $table->string('opening_day', 50);
            $table->string('period', 2);
            $table->time('opening_hour', $precison = 0);
            $table->time('closure_hour', $precision = 0);
            $table->foreignId('adress_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('tattoo_artist_id')
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
        Schema::table('openings_time', function (Blueprint $table) {
            $table->dropForeign(['tattoo_artist_id']);
            $table->dropForeign(['adress_id']);
        });
        Schema::dropIfExists('openings_time');
    }
};
