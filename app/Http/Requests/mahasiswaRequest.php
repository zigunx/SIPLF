<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class mahasiswaRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'id_jurusan' => 'required',
            'id_registrasi' => 'required|numeric|unique:tbl_mahasiswa,id_registrasi,'.Request::get('id_mahasiswa').',id_mahasiswa',
            'nama_mahasiswa' => 'required',
        ];
    }

    public function messages() {
        return [
            'id_jurusan.required' => 'jurusan Diperlukan!',
            'id_registrasi.required' => 'Nomor registrasi diperlukan!',
            'id_registrasi.numeric' => 'Nomor registrasi harus berupa angka!',
            'nama_mahasiswa.required' => 'Nama mahasiswa diperlukan!',
        ];
    }

}
