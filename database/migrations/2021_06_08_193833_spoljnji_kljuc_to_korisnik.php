<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SpoljnjiKljucToKorisnik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('korisnik', function (Blueprint $table) {
            $table->bigInteger('voznja_id')->unsigned();
            $table->foreign('voznja_id')->references('id')->on('voznja')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('korisnik', function (Blueprint $table) {
            $table->dropForeign(['voznja_id']);
        });
    }
}
