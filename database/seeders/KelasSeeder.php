<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert(
            array(
                ['nama_kelas'=>'TI 1A'],
                ['nama_kelas'=>'TI 2A'],
                ['nama_kelas'=>'TI 3A']
            )
            );
    }
}
