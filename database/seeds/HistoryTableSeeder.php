<?php

use Illuminate\Database\Seeder;
use App\History;
class HistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $histories = [

            'HPN',
            'Diabetes',
            'Asthma',
            'Allergies',
            'Cardiac problems',
            'Arthritis',

        ];


        foreach ($histories as $history) {
            History::create(['name' => $history]);
        }
    }
}
