<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table='pengumuman';

    protected $fillble=[
        'judul','isi','user id','kategori_pengumuman_id'
    ];

    protected $casts=[

    ];
}
