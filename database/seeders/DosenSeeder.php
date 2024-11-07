<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosen')->insert(
            array(
                ['nama'=>'Drs Tribatra Rasyid SE','nip'=>'1995080329304','alamat'=>'Surabaya','created_at'=>'2024-04-05 12:50:21','update_at'=>'2024-05-20 08:20:20'],
                ['nama'=>'Aisyah Danira','nip'=>'1995187624369','alamat'=>'Sidoarjo','created_at'=>'2024-04-05 12:51:30','update_at'=>'2024-04-11 10:01:20'],
                ['nama'=>'Andi Ridwan','nip'=>'1990115279305','alamat'=>'Malang','created_at'=>'2024-04-05 12:54:49','update_at'=>'2024-04-08 18:10:20']
            )
            );
    }
}
