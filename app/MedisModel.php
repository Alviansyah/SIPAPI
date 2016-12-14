<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedisModel extends Model
{
    protected $table = 'rekammedis';
    protected $primaryKey = 'idRekamMedis';
    public $timestamps = false;

    protected $fillable = [
      
    ];
}
