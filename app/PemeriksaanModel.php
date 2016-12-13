<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanModel extends Model
{
    protected $table = 'pemeriksaan';
    protected $primaryKey = 'idPemeriksaan';
    public $timestamps = false;

    public $fillable = [
      'idSapi', 'gejala', 'tanggal', 'idUser'
    ];
}
