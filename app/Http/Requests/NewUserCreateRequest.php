<?php

namespace Sisti\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class NewUserCreateRequest extends FormRequest
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
            'name' => 'required|alpha_spaces|min:1|max:70',
            'last_name' => 'required|alpha_spaces|min:1|max:70',
            'email' => 'required|email',
            'type' => 'required',
            'password' => 'required',
        ];
    }
    
    public function attributes()
    {
        return [
            'name' => 'nombre',
            'last_name' => 'apellido',
            'email' => 'correo',
            'type' => 'tipo de usuario',
            'password' => 'contraseña',
        ];
    }
}
