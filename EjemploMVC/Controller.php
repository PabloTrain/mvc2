<?php
//Requerimos Product.php
require_once "Product.php";

//Clase
class Controller{

    //Constructor vacío
    function __construct(){}

    //Método home
    //- Recoge todos los productos
    //- Llama a la vista de inventario
    public function home(){
        //Para acceder al método de otra clase :: (debe ser static)
        $products = Product::all();
        require "views/home.php";
    }

    //Método show
    //- Va a mostrar un producto en particular, id por parametro
    //- Llama a una vista de un producto en concreto
    public function show(){
        $id = $_GET["id"];
        $product = Product::find($id);//Vendrá de start.php
        require "views/show.php";
    }

}//Fin clase