<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPakanModel extends Model
{
    protected $table = "jadwalpakan";
    protected $primaryKey = "idJadwalPakan";
    public $timestamp = false;
}
