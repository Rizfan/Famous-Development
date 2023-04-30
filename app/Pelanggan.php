<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    //

    protected $table = "pelanggan";
 
    public $fillable = ['nama_email'];

    public $timestamps = false;
}
