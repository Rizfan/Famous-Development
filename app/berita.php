<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    //

    protected $table = "berita";
 
    protected $fillable = ['cover_berita','judul_berita','ringkasan_berita','isi_berita','tanggal_berita'];

    public $timestamps = false;
}
