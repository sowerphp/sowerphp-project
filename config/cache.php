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
    | Cache Store Predeterminado
    |--------------------------------------------------------------------------
    |
    | Esta opción controla el cache store predeterminado que será utilizado
    | para todas las operaciones de almacenamiento en caché. Puedes configurarlo
    | a cualquier conexión definida en el array de "stores".
    |
    */
    'default' => env('CACHE_DRIVER', 'redis'),

    /*
    |--------------------------------------------------------------------------
    | Stores de Caché
    |--------------------------------------------------------------------------
    |
    | Aquí puedes definir todos los "stores" de caché para tu aplicación
    | así como sus drivers. Incluso puedes definir múltiples stores para
    | el mismo driver de caché.
    |
    */
    'stores' => [

        /*
        |--------------------------------------------------------------------------
        | Cache Store Redis
        |--------------------------------------------------------------------------
        |
        | Configuración para la conexión al servidor Redis utilizado para
        | almacenamiento en caché.
        |
        | La clave 'connection' especifica cuál de las conexiones Redis definidas
        | en 'database.php' se utilizará. Por defecto, se utiliza 'default'.
        |
        */
        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Prefijos de Clave de Caché
    |--------------------------------------------------------------------------
    |
    | Cuando se utiliza un almacenamiento en caché basado en RAM como APC o
    | Memcached, puede suceder que otras aplicaciones utilicen la misma RAM.
    | Por eso definimos un prefijo para evitar colisiones de claves.
    |
    */
    'prefix' => env('CACHE_PREFIX', 'sowerphp'),

];
