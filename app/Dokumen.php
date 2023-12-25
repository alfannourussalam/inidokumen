<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $fillable = ['tanggal', 'jabatan_id', 'dokumen_id', 'nama_pegawai', 'tempat_lahir', 'tanggal_lahir', 'gaji', 'tanggal_mulai', 'tanggal_akhir'];

    // public function jabatan()
    // {
    //     return $this->belongsTo('App\jabatan');
    // }
}
