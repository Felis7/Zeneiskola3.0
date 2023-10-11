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
        Schema::create('tanarok_tantargyai', function (Blueprint $table) {
            $table->id("tan_tan_id");
            $table->foreignId("tanar_id")->references("tanar_id")->on("tanar_profilok")->onDelete('cascade');
            $table->integer("tantargy_id")->references("tantargy_id")->on("tantargyak")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanarok_tantargyai');
    }
};
