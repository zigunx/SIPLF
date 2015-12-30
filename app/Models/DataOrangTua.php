<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataOrangTua extends Model
{
    //
    protected $table = 'tbl_orangtua';
    protected $primaryKey = 'id_orangtua';
    protected $fillable = array('id_mahasiswa', 'nama_orangtua');
    public $timestamps = false;

    public function mahasiswa() {
        return $this->hasMany('App\Models\mahasiswa');
    }
}
