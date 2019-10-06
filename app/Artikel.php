<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table='artikel';

    protected $fillble=[
        'judul','isi','user id','kategori_artikel_id'
    ];

    protected $casts=[

    ];
}
