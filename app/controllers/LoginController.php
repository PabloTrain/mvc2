<?php

class LoginController{
    
    //Constructor 
    function __construct(){
        //echo "<br>Constructor clase LoginController";
    }

    //Método index
    function index(){
        require "../app/views/login.php";
        //echo "<br>Dentro del index de clase LoginController";
    }

    //Método show
    function show(){
        //echo "<br>Dentro del show de clase LoginController";
    }

}//Fin clase