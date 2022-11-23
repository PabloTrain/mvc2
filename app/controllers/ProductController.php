<?php
namespace App\Controllers;

    //require "../Product.php";
use App\Models\Product;
use Dompdf\Dompdf;

class ProductController{
    
    //Constructor 
    function __construct(){
        //echo "<br>Constructor clase ProductController";
    }

    //Constructor 
    function index(){
        //echo "<br>Dentro del index de clase ProductController";
        $products = Product::all();
        require "../app/views/homeProduct.php";
    }

    //Método show
    function show(){
        //echo "<br>Dentro del show de clase ProductController";
        $id = $_GET["id"];
        $product = Product::find($id);
        require "../views/show.php";
    }

   function pdf(){
    
    $dompdf = new Dompdf();
    $dompdf->loadHtml('<h1>Hola mundo</h1><br>');
    $dompdf->render();
    header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=documento.pdf");
    echo $dompdf->output();
   } 

}//Fin clase