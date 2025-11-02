<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horas = [
            ['hora' => '10:00 - 10:55', 'created_at' => now(), 'updated_at' => now()],
            ['hora' => '11:00 - 11:55', 'created_at' => now(), 'updated_at' => now()],
            ['hora' => '12:00 - 12:55', 'created_at' => now(), 'updated_at' => now()],
            ['hora' => '13:00 - 13:55', 'created_at' => now(), 'updated_at' => now()],
            ['hora' => '14:00 - 14:55', 'created_at' => now(), 'updated_at' => now()],
            ['hora' => '15:00 - 15:55', 'created_at' => now(), 'updated_at' => now()],
            ['hora' => '16:00 - 16:55', 'created_at' => now(), 'updated_at' => now()],
            ['hora' => '17:00 - 17:55', 'created_at' => now(), 'updated_at' => now()],
            ['hora' => '18:00 - 18:55', 'created_at' => now(), 'updated_at' => now()],
            ['hora' => '19:00 - 19:55', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('horas')->insert($horas);
    }
}
