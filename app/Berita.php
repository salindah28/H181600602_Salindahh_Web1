<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table='berita';

    protected $fillble=[
        'judul','isi','user id','kategori_berita_id'
    ];

    protected $casts=[

    ];
}
