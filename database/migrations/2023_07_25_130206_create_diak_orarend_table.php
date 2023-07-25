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
        Schema::create('diak_orarend', function (Blueprint $table) {
            $table->id("do_id");
            $table->integer("u_id");
            $table->integer("tanar_id");
            $table->timestamps("datum");
            $table->timestamps("ido");
            $table->boolean("fizetve");
            $table->timestamps("created_at");
            $table->integer("payment_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diak_orarend');
    }
};
