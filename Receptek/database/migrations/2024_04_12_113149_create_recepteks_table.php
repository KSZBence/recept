<?php

use App\Models\Kategoria;
use App\Models\Receptek;
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
        Schema::create('recepteks', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('kat_id')->references("id")->on('kategorias');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();
        });

        Receptek::create(["nev" => "Recept 1","kat_id" => 1, "kep_eleresi_ut" => "kepek/kep.png", "leiras" => "Recept 1 aaaaaaaaaa"]);
        Receptek::create(["nev" => "Recept 2","kat_id" => 1, "kep_eleresi_ut" => "kepek/kep.png", "leiras" => "Recept 2 lorem"]);
        Receptek::create(["nev" => "Recept 3","kat_id" => 2, "kep_eleresi_ut" => "kepek/kep.png", "leiras" => "Recept 3  sadaadaa"]);
        Receptek::create(["nev" => "Recept 4","kat_id" => 3, "kep_eleresi_ut" => "kepek/kep.png", "leiras" => "Recept 4  sadaadaa"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepteks');
    }
};
