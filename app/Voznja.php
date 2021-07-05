<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voznja extends Model
{
    public $table = 'voznja';


    //jedan let ima vise korisnika
    public function korisnici()
    {
        return $this->hasMany('App\Korisnik');
    }
    public function smanjiMesta($broj_karata)
    {
        if ($this->broj_mesta_u_vozu >= $broj_karata) {
            $this->decrement('broj_mesta_u_vozu', $broj_karata);
            return true;
        }
        return false;
    }
}
