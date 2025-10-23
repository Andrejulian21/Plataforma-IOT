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
        Schema::create('lecturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dispositivo_id')->constrained('dispositivos')->onDelete('cascade');
            $table->foreignId('variable_id')->constrained('variables')->onDelete('cascade');
            $table->float('valor');
            $table->timestamp('timestamp')->useCurrent();
            $table->string('estado')->default('ok');
            $table->string('calidad_dato')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturas');
    }
};
