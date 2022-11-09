<?php
    //echo "<h2>Contenido PRIVADO</h2>";

    //recurso/accion/parametro
        //Recurso : controladores
        //Accion : métodos de controladores
        //Parametro

    require_once "EjemploMVC/Controller.php";
 
    $app = new Controller();
    //Defino variable de petición en la url

    //Recoger el método que le pasa como parámetro
    if(isset($_GET["method"])){
        $method = $_GET["method"];//show, find

    //Si no especifica ningún método para cargar, se usa el home
    }else{
        $method = "home";
    }

    //Varificar que el método existe
    if(method_exists($app, $method)){
        $app->$method();
    //Si no existe devuelve un código de error
    }else{
        http_response_code(404);
        die("Método no encontrado");//Exit
    }
    