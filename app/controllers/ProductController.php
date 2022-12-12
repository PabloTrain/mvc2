<?php
namespace App\Controllers;

    //require "../Product.php";
use App\Models\Product;
use App\Models\ProductType;
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
        require "../app/views/product/index.php";
    }

    //Método show
    public function show($args){
        //args es un array, tomamos el id con uno de estos métodos
        // $id = (int) $args[0];
        list($id) = $args;
        $product = Product::find($id);
        require('../app/views/product/show.php');        
        }

    public function create(){
        $product_types = ProductType::all();
        require '../app/views/product/create.php';
    }


    public function store(){
        $product = new Product();
        $product->name = $_REQUEST['name'];
        $product->price = $_REQUEST['price'];
        $product->fecha_compra = $_REQUEST['fecha_compra'];
        $product->insert();
        header('Location:/product');
    }

    public function edit($arguments){
        $id = (int) $arguments[0];
        $product = Product::find($id);
        require '../app/views/product/edit.php';
    }

    public function update(){
        $id = $_REQUEST['id'];
        $product = Product::find($id);
        $product->name = $_REQUEST['name'];
        $product->price = $_REQUEST['price'];
        $product->fecha_compra = $_REQUEST['fecha_compra'];
        $product->save();
        header('Location:/product');
    }

    public function delete($arguments){
        $id = (int) $arguments[0];
        $product = Product::find($id);
        $product->delete();
        header('Location:/product');
    }
}//Fin clase