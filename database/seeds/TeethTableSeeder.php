<?php

use Illuminate\Database\Seeder;
use App\Teeth;
class TeethTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

       $teeths = [
                     '1-1 Incisors',
                     '1-2 lateral incisors',
                     '1-3 canine',
                     '1-4 premola',
                     '1-5 premola',
                     '1-6 mola',
                     '1-7 mola',
                     '1-8 3rd mola (wisdom teeth)',
                     '2-1 Incisors ',
                     '2-2 lateral incisors  ',
                     '2-4 canine',
                     '2-4 premola ',
                     '2-5 premola ',
                     '2-6 mola ',
                     '2-7 mola ',
                     '2-8 3rd mola(wisdom teeth)',
                     '3-1 Incisors ',
                     '3-2 lateral incisors',
                     '3-3 canine',
                     '3-4 premola',
                     '3-5 premola',
                     '3-6 mola',
                     '3-7 mola',
                     '3-8 3rd mola(wisdom teeth)',
                     '4-1 Incisors',
                     '4-2 lateral incisors',
                     '4-3 canine',
                     '4-4 premola',
                     '4-5 premola',
                     '4-6 mola',
                     '4-7 mola',
                     '4-8 3rd mola(wisdom teeth) ',

        ];


        foreach ($teeths as $teeth) {
            Teeth::create(['name' => $teeth]);
        }
    }
}
