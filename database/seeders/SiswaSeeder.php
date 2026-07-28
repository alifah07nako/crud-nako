<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('siswas')->insert([
            ['nama' => 'Andi Pratama', 'kelas' => '10 RPL 1', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Siti Aminah', 'kelas' => '10 RPL 2', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
