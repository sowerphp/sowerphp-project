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
    | Menú general de la web
    |--------------------------------------------------------------------------
    |
    | Este menú se utiliza en las vista públicas.
    |
    */
    'website' => [
        '/inicio' => [
            'name' => 'Inicio',
            'desc' => 'Página de inicio',
            'icon' => 'fa-solid fa-home',
        ],
        '/docs' => [
            'name' => 'Documentación',
            'desc' => 'Conoce la documentación del framework',
            'icon' => 'fa-solid fa-book',
        ],
        '/ejemplos' => [
            'name' => 'Ejemplos',
            'desc' => 'Revisa ejemplos de funcionalidades',
            'icon' => 'fa-solid fa-code',
        ],
        '/contacto' => [
            'name' => 'Contacto',
            'desc' => 'Ponte en contacto con nosotros',
            'icon' => 'fa-solid fa-handshake-angle',
        ],
    ],

];
