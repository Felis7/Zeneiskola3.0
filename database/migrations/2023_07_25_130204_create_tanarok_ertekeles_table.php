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
        Schema::create('tanarok_ertekeles', function (Blueprint $table) {
            $table->id("tan_ert_id");
            $table->integer("tanar_id");
            $table->integer("u_id");
            $table->integer("star");
            $table->text("szoveg");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanarok_ertekeles');
    }
};
