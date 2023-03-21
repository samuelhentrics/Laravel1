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
        Schema::create('table_reservation_vehicule', function (Blueprint $table) {
            $table->Integer('reservation_id');
			$table->foreign('reservation_id')->references('codereservation')->on('reservations')->onDelete('cascade');

			$table->String('vehicule_id');
            $table->foreign('vehicule_id')->references('matricule')->on('vehicules')->onDelete('cascade');

			$table->primary(['vehicule_id','reservation_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_reservation_vehicule');
    }
};
