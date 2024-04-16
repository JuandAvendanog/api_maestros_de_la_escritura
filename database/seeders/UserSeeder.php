<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        for($i = 0; $i < 3; $i++){
            DB::table('users')->insert([
                'name' => Str::random(10),
                'age' => random_int(12,16),
                'email' => Str::random(10).'@example.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}