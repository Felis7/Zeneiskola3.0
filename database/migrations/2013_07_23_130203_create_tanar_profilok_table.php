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
            $table->string("nev", 50)->nullable();
            $table->text("leiras")->nullable();
            $table->integer("irsz")->nullable();
            $table->string("telepules", 20)->nullable();
            $table->string("cim", 40)->nullable();
            $table->integer("telefonszam")->nullable();
            $table->integer("oradij")->nullable();
            $table->timestamp("elofizetes_lejarata")->nullable();
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
