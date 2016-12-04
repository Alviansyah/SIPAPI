<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SapiModel extends Model
{
    protected $table = 'dataSapi';
    protected $primaryKey = 'idSapi';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idKategori', 'jenisKelamin', 'usia', 'tinggi', 'bobot', 'status', 'idstatussapi', 'arsip'
    ];

}
