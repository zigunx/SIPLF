<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UkuranJas extends Model
{
    //
    protected $table = 'tbl_ukuranjas';
    protected $primaryKey = 'id_jas';
    protected $fillable = array('ukuranjas');
    public $timestamps = false;

    /*
    public function persyaratan() {
        return $this->belongsTo('App\Models\Persyaratan','id_jas');
    }
*/
    public function mahasiswa() {
        return $this->hasMany('App\Models\mahasiswa');
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
