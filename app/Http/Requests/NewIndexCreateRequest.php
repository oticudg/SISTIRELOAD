<?php

namespace Sisti\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewIndexCreateRequest extends FormRequest
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
            'number_record' => 'required|unique:new_indexes',
            'type_doc' => 'required',
            'patient_id' => 'unique:new_indexes|min:4|max:8',
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