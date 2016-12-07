<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenyakitModel extends Model
{
    protected $table = 'penyakit';
    protected $primaryKey = 'idPenyakit';
    public $incrementing = false;
    public $timestamps = false;
}
