<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horarios = [
            ["rango" => "8:00 - 9:00"],
            ["rango" => "9:00 - 10:00"],
            ["rango" => "10:00 - 11:00"],
            ["rango" => "11:00 - 12:00"],
            ["rango" => "1:00 - 2:00"],
            ["rango" => "2:00 - 3:00"],
            ["rango" => "3:00 - 4:00"],
            ["rango" => "4:00 - 5:00"],
            ["rango" => "5:00 - 6:00"],
        ];

        $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];

        // Insertar cada combinación de horario y día
        foreach ($dias as $dia) {
            foreach ($horarios as $horario) {
                DB::table('Schedules')->insert([
                    'hour' => $horario['rango'],
                    'day' => $dia,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
