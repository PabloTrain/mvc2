<?php
namespace App\Controllers;

use App\Models\Login;

class LoginController{
    
    //Constructor 
    function __construct(){
        //echo "<br>Constructor clase LoginController";
    }

    //Método index
    function index(){
        if(isset($_SESSION["name"])){
            header("Location: /home/index");
        }else{
           require "../app/views/login/index.php"; 
        }
        
        //echo "<br>Dentro del index de clase LoginController";
    }

    //Método show
    function show(){
        //echo "<br>Dentro del show de clase LoginController";
    }

    public function iniciarsesion(){

        $name = $_POST["name"];
        $password = $_POST["password"];
        $user = Login::find($name);


        if(password_verify($password, $user->password)){
            session_start();
            $_SESSION["name"] = $name;
            header("Location: /home/index");
        }else{
            header("Location: /login/index");
        }
        
    }

}//Fin clase