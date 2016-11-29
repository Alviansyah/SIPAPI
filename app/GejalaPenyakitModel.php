<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GejalaPenyakitModel extends Model
{
    protected $table = 'gejalapenyakit';
    protected $primaryKey = 'idGejala';
    public $incrementing = false;
    public $timestamps = 'false';
}
