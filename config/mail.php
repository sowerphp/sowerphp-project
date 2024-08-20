<?php

/**
 * SowerPHP: Simple and Open Web Ecosystem Reimagined for PHP.
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
    | Configuración Predeterminada del Correo Electrónico
    |--------------------------------------------------------------------------
    |
    | Especifica el sistema de correo predeterminado que se usará para enviar
    | correos electrónicos desde la aplicación.
    |
    */
    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Configuraciones del Mailer
    |--------------------------------------------------------------------------
    |
    | Configuración de los diferentes sistemas de correo que la aplicación
    | podría utilizar para enviar correos electrónicos.
    |
    */
    'mailers' => [

        /*
        |--------------------------------------------------------------------------
        | Mailer: SMTP
        |--------------------------------------------------------------------------
        |
        | Configuración del correo utilizando SMTP.
        |
        */
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.gmail.com'),
            'port' => env('MAIL_PORT', 465),
            'encryption' => env('MAIL_ENCRYPTION', 'ssl'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'validate_cert' => env('MAIL_VALIDATE_CERT', true),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Configuración Global "From"
    |--------------------------------------------------------------------------
    |
    | Puedes especificar una dirección de correo electrónico global desde la
    | que todos los correos electrónicos enviados por la aplicación serán
    | enviados.
    |
    */
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS'),
        'name' => env('MAIL_FROM_NAME', 'SowerPHP'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Configuración Global "To"
    |--------------------------------------------------------------------------
    |
    | Puedes especificar una dirección de correo electrónico global hacia la
    | que todos los correos electrónicos serán enviados por defecto al ser
    | generada una notificación en la aplicación (ej: contacto).
    |
    */
    'to' => [
        'address' => env('MAIL_TO_ADDRESS'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Configuración predeterminada de la recepción de correo electrónico
    |--------------------------------------------------------------------------
    |
    | Especifica el sistema de correo predeterminado que se usará para recibir
    | correos electrónicos en la aplicación.
    |
    */
    'default_receiver' => env('MAIL_RECEIVER', 'imap'),

    /*
    |--------------------------------------------------------------------------
    | Configuraciones del Receiver
    |--------------------------------------------------------------------------
    |
    | Configuración de los diferentes sistemas de correo que la aplicación
    | podría utilizar para recibir correos electrónicos.
    |
    */
    'receivers' => [

        /*
        |----------------------------------------------------------------------
        | Receiver: IMAP
        |----------------------------------------------------------------------
        |
        | Configuración de la recepción de correo utilizando IMAP.
        |
        */
        'imap' => [
            'transport' => 'imap',
            'host' => env('IMAP_HOST', 'imap.gmail.com'),
            'port' => env('IMAP_PORT', 993),
            'encryption' => env('IMAP_ENCRYPTION', 'ssl'),
            'username' => env('IMAP_USERNAME'),
            'password' => env('IMAP_PASSWORD'),
            'mailbox' => env('IMAP_MAILBOX', 'INBOX'),
            'attachments_dir' => env('IMAP_ATTACHMENTS_DIR', null),
            'validate_cert' => env('IMAP_VALIDATE_CERT', true),
        ],

    ],

];
