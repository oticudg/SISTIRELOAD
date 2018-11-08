<?php

namespace Sisti\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class NewIndexEditRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'number_record' => 'required',
            'type_doc' => 'required',
            'patient_id' => 'min:4|max:8',
            'state' =>'required',
            'municipality' => 'required',
            'parish' => 'required',
            'sex' => 'required',
            'name' => 'required|alpha_spaces|min:1|max:70',
            'last_name' => 'required|alpha_spaces|min:1|max:70',
            'birthdate' => 'required|date_format:"Y-m-d"',
            'triage_id' => 'required', 
        ];
    }

    public function attributes()
    {
        return [
            'number_record' => 'historia',
            'type_doc' => 'documento',
            'patient_id' => 'cedula',
            'sex' => 'sexo',
            'name' => 'nombres',
            'last_name' => 'apellidos',
            'state' => 'estado',
            'municipality' => 'municipio',
            'parish' => 'parroquia',
            'birthdate' => 'fecha de nacimiento',
            'triage_id' => 'triaje',
        ];
    }
}
