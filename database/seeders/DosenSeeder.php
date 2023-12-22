<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('dosens')->insert([
            'nidn' => "121212",
            'nama' => 'Dosen12',
            'alamat' => 'Padang',
            'no_hp' => '0812121212',
        ]);//
    }

}
    /**
     * Run the database seeds.
     */

