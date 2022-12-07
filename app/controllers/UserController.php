<?php
namespace App\Controllers;

    //require "../User.php";
use App\Models\User;


class UserController{
    
    //Constructor 
    function __construct(){
        //echo "<br>Constructor clase ProductController";
    }

    public function index(){
        //buscar datos
        $users = User::all();
        //pasar a la vista
        require('../app/views/user/index.php');
    }

    public function show($args){
        //args es un array, tomamos el id con uno de estos métodos
        // $id = (int) $args[0];
        list($id) = $args;
        $user = User::find($id);
        require('../app/views/user/show.php');        
    }

    public function create(){
        require '../app/views/user/create.php';
    }

    public function store(){
        $user = new User();
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->insert();
        header('Location:/user');
    }

    public function edit($arguments){
        $id = (int) $arguments[0];
        $user = User::find($id);
        require '../app/views/user/edit.php';
    }

    public function update(){
        $id = $_REQUEST['id'];
        $user = User::find($id);
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->save();
        header('Location:/user');
    }

    public function delete($arguments){
        $id = (int) $arguments[0];
        $user = User::find($id);
        $user->delete();
        header('Location:/user');
    }
}    