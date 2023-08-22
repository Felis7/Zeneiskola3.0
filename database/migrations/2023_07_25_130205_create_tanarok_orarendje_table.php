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
        Schema::create('tanarok_orarendje', function (Blueprint $table) {
            $table->id("to_id");
            $table->integer("tanar_id");
            $table->integer("het_napjai");
            $table->timestamps("start");
            $table->timestamps("stop");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanarok_orarendje');
    }
};
