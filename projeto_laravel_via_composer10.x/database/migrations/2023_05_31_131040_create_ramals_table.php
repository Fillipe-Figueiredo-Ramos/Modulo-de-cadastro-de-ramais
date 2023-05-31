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
        Schema::create('ramals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('DESCRIÇÃO_LOTAÇÃO_ANTERIOR', 100);
            $table->string('SIGLA_ANTERIOR', 50);
            $table->string('DESCRIÇÃO_LOTAÇÃO_NOVA', 100);
            $table->string('SIGLA_NOVA',50);
            $table->integer('RAMAL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramals');
    }
};
