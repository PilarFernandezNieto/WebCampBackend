<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $dias = [
            ['dia' => 'Viernes','created_at' => now(),'updated_at' => now(),],
            ['dia' => 'Sábado', 'created_at' => now(),'updated_at' => now(),],

        ];

        DB::table('dias')->insert($dias);
    }
}
