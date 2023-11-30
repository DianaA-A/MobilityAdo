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
        Schema::create('estatus_unidades', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('autobus');
            $table->string('ubicacion');
            $table->string('estatus');
            $table->string('descripcion');
            $table->string('diasfr');
            $table->string('descripcionfalla');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estatus_unidades');
    }
};
