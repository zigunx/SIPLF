<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PegawaiRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        if(Request::get('id_user')){
            $pass = 'min:5';
        } else {
            $pass = 'required_with:username|min:5';
        }
        return [
            
            'nama_user' => 'required',
            'kelahiran' => 'required',
            'jk' => 'required',
            'status' => 'required',
            'username' => 'required|min:5|max:20|unique:tbl_administrator,username,'.Request::get('id_user').',id_user',
            'password' => $pass
        ];
    }

    public function messages() {
        return [
            'nip.required' => 'NIP Diperlukan!',
            'nip.numeric' => 'NIP hanya boleh angka saja!',
            'nip.unique' => 'NIP sudah terpakai!',
            'nama_user.required' => 'Nama Pegawai Diperlukan',
            'kelahiran.required' => 'Kelahiran Diperlukan!',
            'jk.required' => 'Jenis Kelamin Diperlukan',
            'status.required' => 'Status Diperlukan',
            'username.required' => 'Username diperlukan',
            'username.min' => 'Username minimal 5 karakter',
            'username.max' => 'Username max 20 karakter',
            'username.unique' => 'Username sudah terpakai!',
            'password.required_with' => 'Password diperlukan',
            'password.min' => 'Password minimal 5 karakter'
        ];
    }

}
