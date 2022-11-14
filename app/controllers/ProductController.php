<?php

    require "../Product.php";

class ProductController{
    
    //Constructor 
    function __construct(){
        //echo "<br>Constructor clase ProductController";
    }

    //Constructor 
    function index(){
        //echo "<br>Dentro del index de clase ProductController";
        $products = Product::all();
        require "../views/home.php";
    }

    //Método show
    function show(){
        //echo "<br>Dentro del show de clase ProductController";
        $id = $_GET["id"];
        $product = Product::find($id);
        require "../views/show.php";
    }

}//Fin clase