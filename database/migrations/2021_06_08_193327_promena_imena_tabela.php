<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PromenaImenaTabela extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename("korisniks", "korisnik");
        Schema::rename("voznjas", "voznja");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename("korisnik", "korisniks");
        Schema::rename("voznja", "voznjas");
    }
}
