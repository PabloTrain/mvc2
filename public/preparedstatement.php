<?php

    $dsn = "mysql:dbname=demo;host=db";
    $usuario = "dbuser";
    $password = "secret";

    /*
        1. Preparar la consulta -> prepare()
        2. Vincular los datos -> bindParam/bindValue
        3. Ejecutar las sentencias -> execute() (query, exec);
    */

    try{
        $db = new PDO($dsn, $usuario, $password);
        //Establece el nivel de error que muestra la conexión
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Preparamos la consulta por nombre
        //$sentencia = $db->prepare("INSERT INTO credenciales (nombreusu, password) VALUES (:nombre, :clave)");
        
        //Preparamos la consulta por posicion
        $sentencia = $db->prepare("INSERT INTO credenciales (nombreusu, password) VALUES (:nombre, :clave)");
        
        
        $nombre = "Carlos";
        $clave = "111";

        //Vincular datos con bindParam, se puede sobreescribir
        //$sentencia->bindParam(":nombre",$nombre);
        //$sentencia->bindParam(":clave",$clave1);

        //Vincular datos con bindValue, no se sobreescribe
        //$sentencia->bindValue(1,$nombre);
        //$sentencia->bindValue(2,$clave1);

        //$nombre = "Pedro";
        //$clave1 = "555";


        //Ejecutamos la sentencia
        //$sentencia->execute();

        //Execute con array
        $sentencia->execute(array(':nombre' => $nombre, ':clave' => $clave));

        echo "<h2>Éxito</h2>";

    }catch(PDOException $e){
        echo "Error producido al conectar: " . $e->getMessage();
    }