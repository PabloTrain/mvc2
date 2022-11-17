<?php 
//Siguiente instructor a php debe ser el namespace
namespace Dwes\Galaxias\Pegaso;

const RADIO = 0.75; //Millones de años luz

function observar($mensaje){
    echo "<br>Estoy DIRIGIENDO a la galaxia " . $mensaje;
}

class Galaxia{

    function __construct(){
        $this->nacimiento();
    }

    function nacimiento(){
        echo "<br>Soy una GALAXIA NUEVA";
    }

    public static function muerte(){
        echo "<br>Me ESTOY DESTRUYENDO!!";
    }

    
}