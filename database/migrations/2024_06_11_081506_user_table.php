<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user',function(Blueprint $table){
            $table->increments('id_user',30);
            $table->string('nama_user',200);
            $table->string('username',60)->unique();
            $table->string('password',60);
            $table->string('email',200)->unique();
            $table->string('ho_hp',30)->nullable();
            $table->string('wa',30)->nullable();
            $table->string('pin',30);
            $table->string('id_jenis_user',3);
            $table->string('status_user',30)->nullable();
            $table->string('delete_mark',1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
