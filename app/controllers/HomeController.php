<?php
namespace App\Controllers;

class HomeController{
    
    //Constructor 
    function __construct(){
        //echo "<br>Constructor clase HomeController";
    }

    //Método index
    function index(){

        session_start();

        if(isset($_SESSION["name"])){
            require "../app/views/home.php";
            
        }else{
            header("Location: /login/iniciarsesion");
        }
        
        //echo "<br>Dentro del index de clase HomeController";
    }

    //Método show
    function show(){
        //echo "<br>Dentro del show de clase HomeController";
    }

    function cerrarsesion(){
        session_start();
        unset($_SESSION["name"]);
        session_destroy();
        setcookie(session_name(), "", time()-7200);
        header("Location: /login/index/");
        exit;
    }

}//Fin clase