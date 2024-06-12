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
        Schema::disableForeignKeyConstraints();
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_main');
            $table->string('street', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->integer('npa')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->foreignId('tattoo_artist_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('canton_id')
                ->nullable()
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
        Schema::table('adresses', function (Blueprint $table) {
            $table->dropForeign(['tattoo_artist_id']);
            $table->dropForeign(['canton_id']);
        });
        Schema::dropIfExists('adresses');
    }
};
