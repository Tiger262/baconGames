<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class GamersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //name, email, adress, gender, occupation
    $gamers = [
        ['John Doe', 'john@example.com', '123 Main St', 'Male', 'Software Engineer'],
        ['Jane Smith', 'jane@example.com', '456 Elm Ave', 'Female', 'Graphic Designer'],
        ['Mike Johnson', 'mike@example.com', '789 Oak Ln', 'Male', 'Data Scientist']
    ];
    $this->command->getOutput()->progressStart(count($gamers));
    foreach ($gamers as $gamer) {
        DB::table('gamers')->insert([
            'name' => $gamer[0],
            'email' => $gamer[1],
            'adress' => $gamer[2],
            'gender' => $gamer[3],
            'occupation' => $gamer[4]
        ]);
        $this->command->getOutput()->progressAdvance();
    }
    $this->command->getOutput()->progressFinish();
    }
}
