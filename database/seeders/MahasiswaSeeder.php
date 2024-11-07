<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert(
            array(
                ['nama'=>'Doni Damada','nim'=>'431672','no_wa'=>'0821763792','created_at'=>'2024-04-05 12:50:21','update_at'=>'2024-05-20 08:20:20'],
                ['nama'=>'Aisyah Danira','nim'=>'431655','no_wa'=>'0895092930','created_at'=>'2024-04-05 12:51:30','update_at'=>'2024-04-11 10:01:20'],
                ['nama'=>'Andi Ridwan','nim'=>'431137','no_wa'=>'0821404329','created_at'=>'2024-04-05 12:54:49','update_at'=>'2024-04-08 18:10:20']
            )
            );
    }
}
