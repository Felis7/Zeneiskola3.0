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
        Schema::create("Hangszerpiac", function(Blueprint $table){
            $table->id();
            $table->string("nev");
            $table->integer("ar");
            $table->string("hely");
            $table->string("kep");
            $table->text("leiras");
            $table->string("telefonszam");
            $table->string("email");
            $table->foreignId("uid")->references("uid")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("hangszerpiac");
    }
};
