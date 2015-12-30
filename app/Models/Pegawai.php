<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Pegawai extends Model {

    //
    protected $table = 'tbl_administrator';
    protected $primaryKey = 'id_user';
    protected $fillable = ['nip', 'nama_user', 'kelahiran', 'matpel', 'jk', 'status', 'username', 'password'];
    protected $hidden = ['password'];
    public $timestamps = false;

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
