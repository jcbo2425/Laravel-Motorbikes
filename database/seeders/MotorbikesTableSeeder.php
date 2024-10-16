<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class MotorbikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('motorbikes')->insert([
            ['model' => 'Kawasaki', 'cylinderCap' => '300cc', 'color'=> 'Green'],
            ['model' => 'Ducati', 'cylinderCap' => '275cc', 'color'=> 'Red'],
            ['model' => 'Aprilia', 'cylinderCap' => '275cc', 'color'=> 'Silver'],
        ]);
    }
}
