<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primarykey = 'id_mahaiswa';

    protected $fillable = array(
        'nama',
        'nim',
        'no_wa'
    );
}
