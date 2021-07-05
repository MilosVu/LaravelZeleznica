<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KorisnikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 40; $i++) {
            DB::table('korisnik')->insert([
                'ime_prezime' => 'Korisnik ' . ($i+1),
                'broj_telefona' => '+381 6' . rand(100000, 9999999),
                'email' =>  'korisnik' . "." . 'mejl' . ($i+1) . "@gmail.com",
                'broj_karata' =>  rand(1, 5),
                'voznja_id' =>  rand(1, 20),
            ]);
        }
    }
}
