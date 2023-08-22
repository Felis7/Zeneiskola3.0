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
        Schema::create('barion_tranzakcio', function (Blueprint $table) {
            $table->id("bt_id");
            $table->integer("payment_id");
            $table->string("status");
            $table->timestamp("letrehozas_ideje");
            $table->integer("total");
            $table->timestamp("fizetes_ideje")->useCurrent();
            $table->string("get_data");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barion_tranzakcio');
    }
};
