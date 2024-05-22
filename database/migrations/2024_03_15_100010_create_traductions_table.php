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
        Schema::create('traductions', function (Blueprint $table) {
            $table->id();
            $table->string('table', 255);
            $table->string('field', 255);
            $table->string('value', 255);
            $table->string('language', 10);
            $table->foreignId('style_id')
                ->nullable()
                ->default(null)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
                $table->foreignId('language_id')
                ->nullable()
                ->default(null)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
                $table->foreignId('canton_id')
                ->nullable()
                ->default(null)
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

        Schema::table('traductions', function (Blueprint $table) {
            $table->dropForeign(['style_id']);
            $table->dropForeign(['language_id']);
            $table->dropForeign(['canton_id']);
        });
        Schema::dropIfExists('traductions');
    }
};
