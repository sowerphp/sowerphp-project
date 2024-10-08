SowerPHP: Proyecto base para usar el framework
==============================================

Instalación
-----------

Crear proyecto usando composer:

```shell
composer create-project --prefer-dist sowerphp/sowerphp-project my-project dev-master
cd my-project
cp env-dist .env
```

Ejemplos
--------

### Crear controlador

Crear archivo `src/app/Controller/Test.php` con el siguiente contenido:

```php
<?php

namespace app;

use \sowerphp\core\Controller;
use \sowerphp\core\Network_Request as Request;

class Controller_Test extends Controller
{

    public function boot(): void
    {
        app('auth')->allowActionsWithoutLogin('*');
    }

    public function action(Request $request, ...$args)
    {
        dd($request, $args);
    }

}
```

Licencia
--------

Este programa es software libre: usted puede redistribuirlo y/o
modificarlo bajo los términos de la Licencia Pública General Affero
de GNU publicada por la Fundación para el Software Libre, ya sea la
versión 3 de la Licencia, o (a su elección) cualquier versión
posterior de la misma.

Este programa se distribuye con la esperanza de que sea útil, pero
SIN GARANTÍA ALGUNA; ni siquiera la garantía implícita
MERCANTIL o de APTITUD PARA UN PROPÓSITO DETERMINADO.
Consulte los detalles de la Licencia Pública General Affero de GNU
para obtener una información más detallada.

Debería haber recibido una copia de la Licencia Pública General
Affero de GNU junto a este programa.
En caso contrario, consulte
[Licencia Pública General Affero de GNU](http://www.gnu.org/licenses/agpl.html).
