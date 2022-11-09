<?php
//Fichero que simula el modelo con datos
class Product{
    //Definimos una constante
    const PRODUCTS = [
        array(1, "Cortacesped"),
        array(2, "Pizarra"),
        array(3, "Billar"),
        array(4, "Dardos")
    ];

    //Constructor
    function __construct(){
        //Constructor vacío
    }

    //Devuelve todos los procuctos, devuelve el array
    public static function all(){
        //Para acceder a una constante ::
        return Product::PRODUCTS;
    }

    //Devolver un producto en particular
    public static function find($id){
        return Product::PRODUCTS[$id-1];
    }

}//Fin clase