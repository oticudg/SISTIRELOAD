<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted'             => 'El campo :attribute debe ser aceptado <span class="fa fa-close"></span>',
    'active_url'           => 'El campo :attribute no es una URL válida <span class="fa fa-close"></span>',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date <span class="fa fa-close"></span>',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date <span class="fa fa-close"></span>',
    'alpha'                => 'El campo :attribute sólo puede contener letras <span class="fa fa-close"></span>',
    'alpha_spaces'                => 'El campo :attribute sólo puede contener letras <span class="fa fa-close"></span>',
    'alpha_dash'           => 'El campo :attribute sólo puede contener letras, números y guiones (a-z, 0-9, -_) <span class="fa fa-close"></span>',
    'alpha_num'            => 'El campo :attribute sólo puede contener letras y números <span class="fa fa-close"></span>',
    'array'                => 'El campo :attribute debe ser un array <span class="fa fa-close"></span>',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date <span class="fa fa-close"></span>',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date <span class="fa fa-close"></span>',
    'between'              => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max <span class="fa fa-close"></span>',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes <span class="fa fa-close"></span>',
        'string'  => 'El campo :attribute debe contener entre :min y :max caracteres <span class="fa fa-close"></span>',
        'array'   => 'El campo :attribute debe contener entre :min y :max elementos <span class="fa fa-close"></span>',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso <span class="fa fa-close"></span>',
    'confirmed'            => 'El campo confirmación de :attribute no coincide <span class="fa fa-close"></span>',
    'date'                 => 'El campo :attribute no corresponde con una fecha válida <span class="fa fa-close"></span>',
    'date_format'          => 'El campo :attribute no corresponde con el formato de fecha :format <span class="fa fa-close"></span>',
    'different'            => 'Los campos :attribute y :other han de ser diferentes <span class="fa fa-close"></span>',
    'digits'               => 'El campo :attribute debe ser un número de :digits dígitos <span class="fa fa-close"></span>',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos <span class="fa fa-close"></span>',
    'dimensions'           => 'El campo :attribute tiene dimensiones inválidas <span class="fa fa-close"></span>',
    'distinct'             => 'El campo :attribute tiene un valor duplicado <span class="fa fa-close"></span>',
    'email'                => 'El campo :attribute no corresponde con una dirección de e-mail válida <span class="fa fa-close"></span>',
    'file'                 => 'El campo :attribute debe ser un archivo <span class="fa fa-close"></span>',
    'filled'               => 'El campo :attribute es obligatorio <span class="fa fa-close"></span>',
    'exists'               => 'El campo :attribute no existe <span class="fa fa-close"></span>',
    'image'                => 'El campo :attribute debe ser una imagen <span class="fa fa-close"></span>',
    'in'                   => 'El campo :attribute debe ser igual a alguno de estos valores :values <span class="fa fa-close"></span>',
    'in_array'             => 'El campo :attribute no existe en :other <span class="fa fa-close"></span>',
    'integer'              => 'El campo :attribute debe ser un número entero <span class="fa fa-close"></span>',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida <span class="fa fa-close"></span>',
    'ipv4'                 => 'El campo :attribute debe ser una dirección IPv4 válida <span class="fa fa-close"></span>',
    'ipv6'                 => 'El campo :attribute debe ser una dirección IPv6 válida <span class="fa fa-close"></span>',
    'json'                 => 'El campo :attribute debe ser una cadena de texto JSON válida <span class="fa fa-close"></span>',
    'max'                  => [
        'numeric' => 'El campo :attribute debe ser :max como máximo <span class="fa fa-close"></span>',
        'file'    => 'El archivo :attribute debe pesar :max kilobytes como máximo <span class="fa fa-close"></span>',
        'string'  => 'El campo :attribute debe contener :max caracteres como máximo <span class="fa fa-close"></span>',
        'array'   => 'El campo :attribute debe contener :max elementos como máximo <span class="fa fa-close"></span>',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo :values <span class="fa fa-close"></span>',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo :values <span class="fa fa-close"></span>',
    'min'                  => [
        'numeric' => 'El campo :attribute debe tener al menos :min <span class="fa fa-close"></span>',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes <span class="fa fa-close"></span>',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres <span class="fa fa-close"></span>',
        'array'   => 'El campo :attribute no debe contener más de :min elementos <span class="fa fa-close"></span>',
    ],
    'not_in'               => 'El campo :attribute seleccionado es inválido <span class="fa fa-close"></span>',
    'numeric'              => 'El campo :attribute debe ser un número <span class="fa fa-close"></span>',
    'present'              => 'El campo :attribute debe estar presente <span class="fa fa-close"></span>',
    'regex'                => 'El formato del campo :attribute es inválido <span class="fa fa-close"></span>',
    'required'             => 'El campo :attribute es requerido <span class="fa fa-close"></span>',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value <span class="fa fa-close"></span>',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values <span class="fa fa-close"></span>',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente <span class="fa fa-close"></span>',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values está presente <span class="fa fa-close"></span>',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente <span class="fa fa-close"></span>',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los campos :values está presente <span class="fa fa-close"></span>',
    'same'                 => 'Los campos :attribute y :other deben coincidir <span class="fa fa-close"></span>',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size <span class="fa fa-close"></span>',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes <span class="fa fa-close"></span>',
        'string'  => 'El campo :attribute debe contener :size caracteres <span class="fa fa-close"></span>',
        'array'   => 'El campo :attribute debe contener :size elementos <span class="fa fa-close"></span>',
    ],
    'string'               => 'El campo :attribute debe contener sólo caracteres <span class="fa fa-close"></span>',
    'timezone'             => 'El campo :attribute debe contener una zona válida <span class="fa fa-close"></span>',
    'unique'               => 'El elemento :attribute ya está en uso <span class="fa fa-close"></span>',
    'uploaded'             => 'El elemento :attribute falló al subir <span class="fa fa-close"></span>',
    'url'                  => 'El formato de :attribute no corresponde con el de una URL válida <span class="fa fa-close"></span>',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [],
];
