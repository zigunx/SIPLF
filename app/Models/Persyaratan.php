<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{

    protected $table = 'tbl_persyaratan';
    protected $primaryKey = 'id_persyaratan';
    protected $fillable = array('id_mahasiswa', 'id_jurusan','nama_berkas','status');
    

    public function mahasiswa() {
        return $this->hasMany('App\Models\mahasiswa');
    }

    public function persyaratan() {
        return $this->hasMany('App\Models\Persyaratan');
    }

    public function scopeDropdownjas($query) {
        $data = array();
        $eselon = $query->select(array('id_jas', 'ukuranjas'))->get();
        if (count($eselon) > 0) {
            foreach ($eselon as $ese) {
                $data[] = array('id' => $ese->id_jas, 'label' => $ese->ukuranjas);
            }
        }
        return $data;
    }

}
