<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{
    //jedan korisnik pripada jednom letu
    public $table = 'korisnik';
    public function voznja()
    {
        return $this->belongsTo('App\Voznja');
    }
}
