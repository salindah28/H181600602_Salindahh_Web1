<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='galeri';

    protected $fillble=[
        'judul','isi','user id','kategori_galeri_id'
    ];

    protected $casts=[

    ];
}
