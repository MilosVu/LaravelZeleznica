<?php

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VoznjaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('voznja')->insert([
                'pocetna_destinacija' => 'Pocetna destinacija ' . ($i+1),
                'krajnja_destinacija' => 'Krajnja destinacija ' . ($i+1),
                'duzina_voznje' =>  rand(1800, 7200) * 10,
                'datum_polaska' =>  Carbon::today()->addDays(rand(10, 160)),
                'broj_mesta_u_vozu' =>  rand(50, 200),
                'kompanija' =>  'Kompanija ' . ($i+1),
            ]);
        }
    }
}
