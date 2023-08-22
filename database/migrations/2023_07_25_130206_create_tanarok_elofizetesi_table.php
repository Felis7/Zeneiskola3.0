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
        Schema::create('tanarok_elofizetesi', function (Blueprint $table) {
            $table->id("te_id");
            $table->timestamp("ido");
            $table->integer("osszeg");
            $table->integer("tanar_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanarok_elofizetesi');
    }
};
