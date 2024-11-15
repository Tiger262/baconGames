<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
use DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $genres = [
                'Action',
                'Strategy',
                'Moba',
                'FPS'
            ];
            $this->command->getOutput()->progressStart(count($genres));
            foreach ($genres as $genre) {
                DB::table('genres')->insert([
                    'name' => $genre
                ]);
                $this->command->getOutput()->progressAdvance();
            }
            $this->command->getOutput()->progressFinish();
        }
    }
}
