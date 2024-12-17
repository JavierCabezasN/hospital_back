<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0 ;  $i<10; $i++){
            DB::table('specialities')->insert([
                'name' => 'name'.$i,
                'price' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
