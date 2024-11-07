<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matakuliah')->insert(
            array(
                ['nama_mk'=>'Pemrograman Laravel Teori'],
                ['nama_mk'=>'Pemrograman Laravel Prak'],
                ['nama_mk'=>'Etika Profesi']
            )
            );
    }
}
