<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DosenRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            '_nik'      => 'required',
            '_nama'     => 'required',
            '_jenkel'   => 'required',
            '_alamat'   => 'required',
            '_agama'    => 'required',
            '_bidang'   => 'required'
        ];
    }
}
