<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ukuranjasRequest extends Request {

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
            'ukuranjas' => 'required',
            
        ];
    }

    public function messages() {
        return [
            'ukuranjas.required' => 'Ukuran jas Diperlukan!',
            
        ];
    }

}
