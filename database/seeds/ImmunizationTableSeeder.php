<?php

use Illuminate\Database\Seeder;
use App\Immunization;
class ImmunizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $immunes = [
            'BCG',
            'DPT',
            'opv',
            'Hep. B',
            'Measles',
            'TT',
        ];

        foreach ($immunes as $immune) {
            Immunization::create(['name' => $immune]);
        }
    }
}
