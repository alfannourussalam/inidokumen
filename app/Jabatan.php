<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    public $timestamps = false;
    protected $fillable = ['ket_jabatan', 'gaji'];
    protected $primatyKey = ['dokumen_id'];

    // public function dokumen()
    // {
    //     return $this->hasMany('App\Dokumen');
    // }
}
