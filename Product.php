<?php
//Fichero que simula el modelo con datos
class Product{
    //Definimos una constante
    const PRODUCTS = [
        array(1, "Cortacesped", 89),
        array(2, "Pizarra",  55),
        array(3, "Billar", 222),
        array(4, "Dardos", 60),
        array(5, "Ordenador", 1500),
        array(6, "Mesa", 200),
        array(7, "Proyector", 2000)
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

    public function insert(){
        
    }

}//Fin clase