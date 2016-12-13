<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosisModel extends Model
{
    protected $table = 'diagnosis';
    protected $primaryKey = 'idDiagnosis';
    public $timestamps = false;

    protected $fillable = [
        'idPenyakit', 'idSapi', 'saran', 'idkombinasi', 'tanggal', 'saran'
    ];
}
