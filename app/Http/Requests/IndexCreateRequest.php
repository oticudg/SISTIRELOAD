<?php

namespace Sisti\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexCreateRequest extends FormRequest
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
            'number_record' => 'required',
            'type_doc' => 'required',
            'patient_id' => 'required|unique:indexes|min:4|max:8',
            'sex' => 'required',
            'name' => 'required|alpha|min:1|max:70',
            'last_name' => 'required|alpha|min:1|max:70',
            'birthdate' => 'required|date_format:"d-m-Y"',
            'triage_id' => 'required',
            'admission_date' => 'date_format:"d-m-Y"',
            'egress_date' => 'date_format:"d-m-Y"',
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
            'birthdate' => 'fecha de nacimiento',
            'triage_id' => 'triaje',
            'admission_date' => 'fecha de ingreso',
            'egress_date' => 'fecha de egreso',
        ];
    }
}
