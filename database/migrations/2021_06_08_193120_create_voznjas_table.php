<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoznjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voznjas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pocetna_destinacija');
            $table->string('krajnja_destinacija');
            $table->integer('duzina_voznje');
            $table->date('datum_polaska');
            $table->integer('broj_mesta_u_vozu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voznjas');
    }
}
