<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PublicacionRequest extends Request
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
            'titulo'=>'required',                                   
            'descripcion'=>'required',                                   
            'imagen'=>'required',                                   
            'disertante'=>'required',                                   
            'costo'=>'required',                                   
            'lugar'=>'required',                                   
            'fecha'=>'required',                                   
            'correo'=>'required',                                   
            'telefono'=>'required',                                   
            'estado'=>'required', 
            'id_usuario'=>'required',                                                                               
            'id_carrera'=>'required',                                                                               
        ];
    }
}
