<?php
    //Definir el namespace
    namespace Dwes\Galaxias;

    echo "<br>Nacespace actual " . __NAMESPACE__;

    /*
    Direccionamiento de namespace:
        1. Sin direccionamiento
        2. Con direccionamiento relativo
        3. Con direccionamiento absoluto
    */

    //Es necesario un include/require del archivo
    include "galaxia1.php";
    //Se encuentra en el mismo nivel/carpeta
    echo "<h2>Sin direccionamiento</h2>";

    echo "<br>Radio de la galaxia " . RADIO;
    observar("Vía Láctea");
    $gl = new Galaxia();
    Galaxia::muerte();


    //Es necesario un include/require del archivo
    include "pegaso/pegaso.php";
    //Se encunetra en otro nivel, navego a través del posicionamiento actual
    echo "<h2>Con direccionamiento relativo</h2>";

    echo "<br>Radio de la galaxia " . Pegaso\RADIO;
    Pegaso\observar("Pegaso");
    $gl = new Pegaso\Galaxia();
    Pegaso\Galaxia::muerte();

    //Es necesario un include/require del archivo
    //include "pegaso/pegaso.php";
    //Se encunetra en otro nivel, navego desde la raíz del servidor web
    echo "<h2>Con direccionamiento absoluto</h2>";

    echo "<br>Radio de la galaxia " . \Dwes\Galaxias\Pegaso\RADIO;
    \Dwes\Galaxias\Pegaso\observar("Pegaso");
    $gl = new \Dwes\Galaxias\Pegaso\Galaxia();
    \Dwes\Galaxias\Pegaso\Galaxia::muerte();


    //Usar un elemento en particular del namespace
    echo "<h2>Usando un elemento en particulas del namespace</h2>";

    use const \Dwes\Galaxias\Pegaso\RADIO;
    echo "<br>El radio es " . RADIO;

    use function \Dwes\Galaxias\Pegaso\observar;
    echo observar("Otra galaxia");

    use Dwes\Galaxias\Galaxia;
    echo "<br>Objeto de galaxia genérico " . new Galaxia();

    //Apodar namespace -> Alias
    echo "<h2>Con direccionamiento con alias</h2>";
    use \Dwes\Galaxias\Pegaso\Galaxia as Seiya;
    use \Dwes\Galaxias\Galaxia as Galaxus;

    $pg = new Seiya();
    $glc = new Galaxus();