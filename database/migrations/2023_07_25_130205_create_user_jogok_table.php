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
        Schema::create('user_jogok', function (Blueprint $table) {
            $table->id("ujo_id");
            $table->foreignId("u_id")->references("uid")->on("users")->onDelete('cascade');
            $table->foreignId("uj_id")->references("uj_id")->on("user_jogkorok")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_jogok');
    }
};
