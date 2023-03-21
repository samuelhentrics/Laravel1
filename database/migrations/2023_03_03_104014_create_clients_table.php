<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->Integer('NumeroClient');
            $table->String('nom');
            $table->String('email');
            $table->String('carteBancaire');
            $table->primary('NumeroClient');
            // d'autres trucs utiles : mediumtext, longtext, bigInteger, Double
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};