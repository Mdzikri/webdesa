<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table='data';
    protected $primarykey='id';
    protected $fillable = [
        'id','nama', 'nik', 'alamat','dusun'
    ];
}
