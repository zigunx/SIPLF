<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model {

    //
    protected $table = 'tbl_mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = array('nama_mahasiswa', 'id_registrasi', 'id_jurusan','tmp_tgl_lahir','jenkel','agama','ukuranjas','s_kerja','s_nikah','alamat','no_hp','nama_ortu','nama_suis','pendidikan_terakhir','alamat_skolah');
    

    public function jurusan() {
        return $this->belongsTo('App\Models\jurusan', 'id_jurusan');
    }

    public function ukuranjas() {
        return $this->belongsTo('App\Models\UkuranJas','id_jas');
    }

    public function persyaratan() {
        return $this->belongsTo('App\Models\Persyaratan','id_persyaratan');
    }


    public function dataorangtua() {
        return $this->belongsTo('App\Models\DataOrangTua','id_orangtua');
    }

}
