<?php

//Fichero que simula el modelo con datos
class Product{
    const PRODUCTS = [
        array(1, "Cortacesped"),
        array(2, "Pizarra"),
        array(3, "Billar"),
        array(4, "Dardos")
    ];

    function __construct(){
        //COnstructor vacío
    }

    //Devuelve todos los procuctos, devuelve el array
    public static function all(){
        return Product::PRODUCTS;
    }

    //Devolver un producto en particular
    public function find($id){
        
        return Product::PRODUCTS[$id-1];
    }

}//Fin clase