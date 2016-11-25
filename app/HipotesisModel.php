<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HipotesisModel extends Model
{
    protected $table = 'hipotesispenyakit';
    protected $primaryKey = 'idHipotesis';
    public $timestamps = 'false';

    protected $fillable = [
        'idSapi', 'tglHipotesis', 'idGejala'
    ];
}
