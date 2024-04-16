<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            [
                'name' => 'Aventura gramatical',
                'description' => 'gramatica',
            ],
            [
                'name' => 'Aventura ortografica',
                'description' => 'ortografia',
            ],
            [
                'name' => 'Aventura semantica-lexica',
                'description' => 'semantica-lexica',
            ],
        ];

        foreach ($levels as $level) {
            DB::table('levels')->insert($level);
        }
    }
}
