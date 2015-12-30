<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UkuranJas extends Model
{
    //
    protected $table = 'tbl_ukuran_jas';
    protected $primaryKey = 'id_jas';
    protected $fillable = array('ukuran_jas');
    public $timestamps = false;

    
    public function persyaratan() {
        return $this->belongsTo('App\Models\Persyaratan','id_jas');
    }

    public function mahasiswa() {
        return $this->belongsTo('App\Models\mahasiswa','id_jas');
    }
}
