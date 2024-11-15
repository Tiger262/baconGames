<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            //name, release date, genre_id
        $games = [
            ['Epic Quest', 2018, 1],
            ['Cyber Realm', 2020, 3],
            ['Virtual Warriors', 2019, 3],
            ['bacon', 32, 3],
            ['bacon deluxe', 320, 2],
            ['bacon digital delux edition', 1822, 4],
            ['bacon golden edition', 320, 4],
            ['bacon founders edition', 321, 1],
            ['bacon collectors edition', 2025, 3],
        ];
        $this->command->getOutput()->progressStart(count($games));
        foreach ($games as $game) {
            DB::table('games')->insert([
                'name' => $game[0],
                'release' => $game[1],
                'genre_id' => $game[2]
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();

    }
}
