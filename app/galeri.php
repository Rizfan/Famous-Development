<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    //

    protected $table = "galeri";
 
    protected $fillable = ['nama_foto','file_foto'];

    public $timestamps = false;
}
