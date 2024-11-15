<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class GamerGamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //gamer_id, game_id, gamer_tag, hours_all_time, hours_last_week, achivement_percent, level
    $gamergames = [
        [1, 1, 'JohnThePro', 1000, 50, 75, 40],
        [2, 2, 'JaneGamer', 800, 30, 60, 35],
        [3, 3, 'MikeMaster', 1200, 70, 85, 45]
    ];
    $this->command->getOutput()->progressStart(count($gamergames));
    foreach ($gamergames as $gamergame) {
        DB::table('gamer_games')->insert([
            'gamer_id' => $gamergame[0],
            'game_id' => $gamergame[1],
            'gamer_tag' => $gamergame[2],
            'hours_all_time' => $gamergame[3],
            'hours_last_week' => $gamergame[4],
            'achivements_percent' => $gamergame[5],
            'level' => $gamergame[6],
        ]);
        $this->command->getOutput()->progressAdvance();
    }
    $this->command->getOutput()->progressFinish();
    }
}
