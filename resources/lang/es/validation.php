<?php

/**
 * SowerPHP: Framework PHP hecho en Chile.
 * Copyright (C) SowerPHP <https://www.sowerphp.org>
 *
 * Este programa es software libre: usted puede redistribuirlo y/o
 * modificarlo bajo los términos de la Licencia Pública General Affero
 * de GNU publicada por la Fundación para el Software Libre, ya sea la
 * versión 3 de la Licencia, o (a su elección) cualquier versión
 * posterior de la misma.
 *
 * Este programa se distribuye con la esperanza de que sea útil, pero
 * SIN GARANTÍA ALGUNA; ni siquiera la garantía implícita
 * MERCANTIL o de APTITUD PARA UN PROPÓSITO DETERMINADO.
 * Consulte los detalles de la Licencia Pública General Affero de GNU
 * para obtener una información más detallada.
 *
 * Debería haber recibido una copia de la Licencia Pública General
 * Affero de GNU junto a este programa.
 * En caso contrario, consulte <http://www.gnu.org/licenses/agpl.html>.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Validación de líneas de lenguaje
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de lenguaje contienen los mensajes de error
    | predeterminados utilizados por la clase validadora. Algunas de estas
    | reglas tienen múltiples versiones, como las reglas de tamaño. Siéntase
    | libre de ajustar cada uno de estos mensajes aquí.
    |
    */
    'accepted' => 'El atributo :attribute debe ser aceptado.',
    'active_url' => 'El atributo :attribute no es una URL válida.',
    'after' => 'El atributo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El atributo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El atributo :attribute solo puede contener letras.',
    'alpha_dash' => 'El atributo :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El atributo :attribute solo puede contener letras y números.',
    'array' => 'El atributo :attribute debe ser un arreglo.',
    'before' => 'El atributo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El atributo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El atributo :attribute debe estar entre :min y :max.',
        'file' => 'El archivo :attribute debe tener entre :min y :max kilobytes.',
        'string' => 'El atributo :attribute debe tener entre :min y :max caracteres.',
        'array' => 'El atributo :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean' => 'El atributo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'date' => 'El atributo :attribute no es una fecha válida.',
    'date_equals' => 'El atributo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El atributo :attribute no coincide con el formato :format.',
    'different' => 'El atributo :attribute y :other deben ser diferentes.',
    'digits' => 'El atributo :attribute debe tener :digits dígitos.',
    'digits_between' => 'El atributo :attribute debe tener entre :min y :max dígitos.',
    'dimensions' => 'El atributo :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El atributo :attribute tiene un valor duplicado.',
    'email' => 'El atributo :attribute debe ser una dirección de correo válida.',
    'ends_with' => 'El atributo :attribute debe finalizar con uno de los siguientes valores: :values.',
    'exists' => 'El atributo :attribute seleccionado no es válido.',
    'file' => 'El atributo :attribute debe ser un archivo.',
    'filled' => 'El atributo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El atributo :attribute debe ser mayor que :value.',
        'file' => 'El archivo :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El atributo :attribute debe tener más de :value caracteres.',
        'array' => 'El atributo :attribute debe tener más de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'El atributo :attribute debe ser mayor o igual que :value.',
        'file' => 'El archivo :attribute debe ser mayor o igual que :value kilobytes.',
        'string' => 'El atributo :attribute debe tener :value caracteres o más.',
        'array' => 'El atributo :attribute debe tener :value elementos o más.',
    ],
    'image' => 'El atributo :attribute debe ser una imagen.',
    'in' => 'El atributo :attribute seleccionado no es válido.',
    'in_array' => 'El atributo :attribute no existe en :other.',
    'integer' => 'El atributo :attribute debe ser un número entero.',
    'ip' => 'El atributo :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El atributo :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El atributo :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El atributo :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El atributo :attribute debe ser menor que :value.',
        'file' => 'El archivo :attribute debe ser menor que :value kilobytes.',
        'string' => 'El atributo :attribute debe tener menos de :value caracteres.',
        'array' => 'El atributo :attribute debe tener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El atributo :attribute debe ser menor o igual que :value.',
        'file' => 'El archivo :attribute debe ser menor o igual que :value kilobytes.',
        'string' => 'El atributo :attribute debe tener :value caracteres o menos.',
        'array' => 'El atributo :attribute no debe tener más de :value elementos.',
    ],
    'max' => [
        'numeric' => 'El atributo :attribute no puede ser mayor que :max.',
        'file' => 'El archivo :attribute no puede ser mayor que :max kilobytes.',
        'string' => 'El atributo :attribute no puede ser mayor que :max caracteres.',
        'array' => 'El atributo :attribute no puede tener más de :max elementos.',
    ],
    'mimes' => 'El atributo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El atributo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El atributo :attribute debe ser al menos :min.',
        'file' => 'El archivo :attribute debe ser al menos de :min kilobytes.',
        'string' => 'El atributo :attribute debe tener al menos :min caracteres.',
        'array' => 'El atributo :attribute debe tener al menos :min elementos.',
    ],
    'not_in' => 'El atributo :attribute seleccionado no es válido.',
    'not_regex' => 'El formato del campo :attribute no es válido.',
    'numeric' => 'El atributo :attribute debe ser un número.',
    'present' => 'El atributo :attribute debe estar presente.',
    'regex' => 'El formato del campo :attribute no es válido.',
    'required' => 'El atributo :attribute es obligatorio.',
    'required_if' => 'El atributo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El atributo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El atributo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El atributo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El atributo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El atributo :attribute es obligatorio cuando ninguno de :values están presentes.',
    'same' => 'El atributo :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El atributo :attribute debe ser :size.',
        'file' => 'El archivo :attribute debe ser de :size kilobytes.',
        'string' => 'El atributo :attribute debe tener :size caracteres.',
        'array' => 'El atributo :attribute debe contener :size elementos.',
    ],
    'starts_with' => 'El atributo :attribute debe comenzar con uno de los siguientes valores: :values',
    'string' => 'El atributo :attribute debe ser una cadena de caracteres.',
    'timezone' => 'El atributo :attribute debe ser una zona válida.',
    'unique' => 'El atributo :attribute ya ha sido tomado.',
    'uploaded' => 'El atributo :attribute no se pudo subir.',
    'url' => 'El formato del campo :attribute no es válido.',
    'uuid' => 'El atributo :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Líneas de lenguaje de validación personalizada
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para
    | atributos utilizando la convención "attribute.rule" para nombrar las
    | líneas. Esto hace que sea rápido especificar una línea de lenguaje
    | personalizada específica para una regla de atributo determinada.
    |
    */
    'custom' => [
        /*'attribute-name' => [
            'rule-name' => 'custom-message',
        ],*/
    ],

    /*
    |--------------------------------------------------------------------------
    | Atributos de validación personalizados
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de lenguaje se utilizan para intercambiar nuestro
    | marcador de posición de atributo con algo más amigable para el lector,
    | como "Dirección de correo electrónico" en lugar de "correo electrónico".
    | Esto simplemente nos ayuda a hacer que nuestro mensaje sea más expresivo.
    |
    */
    'attributes' => [],

];
