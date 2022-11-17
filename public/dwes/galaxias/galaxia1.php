<?php 
//Siguiente instructor a php debe ser el namespace
namespace Dwes\Galaxias;

const RADIO = 1.25; //Millones de años luz

function observar($mensaje){
    echo "<br>Estoy mirando a la galaxia " . $mensaje;
}

class Galaxia{

    function __construct(){
        $this->nacimiento();
    }

    function nacimiento(){
        echo "<br>Soy una nueva galaxia";
    }

    public static function muerte(){
        echo "<br>Me destruyo!!";
    }

    function __toString(){
        return "<br>Esto son galaxias superiores";
    }
}