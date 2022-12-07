<?php
namespace Core;

/*
    - SI url no especifica ningún controlador (recurso) => asignado
    uno por defecto => home
    - Si url no especifica ningún método => Asigna defecto = index

    recurso/accion/parametro
*/

class App{

    //Constructor
    function __construct(){
        if(isset($_GET["url"]) && !empty($_GET["url"])){
            $url = $_GET["url"];

        }else{
            $url = "login";
        }

        //Le va a llegar /product/show/5 -> product=recurso ; show=accion ; 5=parametro
        $arguments = explode("/", trim($url, "/"));//trim elimina / al inicio y final
        $controllerName = array_shift($arguments); //product : ProductController
        $controllerName = ucwords($controllerName) . "Controller";
        
        if(count($arguments)){
            $method = array_shift($arguments);//show
        }else{
            $method="index";
        }

        //Voy a cargar el controlador ProductoController
        $file = "../app/controllers/$controllerName" . ".php";

        if(file_exists($file)){
            require_once $file; //Importo el fichero si existe

        //Si no existe creamos el error 404 (NOT FOUND)
        }else{
            http_response_code(404);
            die("No encontrado");
        }

        $controllerName = "\\App\\Controllers\\$controllerName";
        
        //¿EXISTE EL MÉTODO EN EL CONTROLADOR?
        $controllerObject = new $controllerName; //Objeto de la clase
        if(method_exists($controllerObject, $method)){
            //Si el método existe, lo llama
            $controllerObject->$method($arguments);//Método ok -> lo invoco
        }else{
            //Si no existe creamos el error 404 (NOT FOUND)
            http_response_code(404);
            die("No encontrado");
        }
    }
}