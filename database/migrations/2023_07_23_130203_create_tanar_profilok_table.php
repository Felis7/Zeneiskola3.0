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
        Schema::create('tanar_profilok', function (Blueprint $table) {
            $table->id("tanar_id");
            $table->string("nev", 50);
            $table->text("leiras");
            $table->integer("irsz");
            $table->string("telepules", 20);
            $table->string("cim", 40);
            $table->integer("telefonszam");
            $table->string("email");
            $table->integer("oradij");
            $table->timestamp("elofizetes_lejarata");
            $table->integer("payment_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanar_profilok');
    }
};
