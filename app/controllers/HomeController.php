<?php

    namespace App\Controllers;

class HomeController{
    
    //Constructor 
    function __construct(){
        //echo "<br>Constructor clase HomeController";
    }

    //Método index
    function index(){
        require "../app/views/home.php";
        //echo "<br>Dentro del index de clase HomeController";
    }

    //Método show
    function show(){
        //echo "<br>Dentro del show de clase HomeController";
    }

}//Fin clase