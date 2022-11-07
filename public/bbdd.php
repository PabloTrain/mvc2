<?php
    //ZONA PÚBLICA

    require "../bbddcon.php";

    $sql = "select nombreusu, password from credenciales";
    $registros = $bd->query($sql);
    if($registros->rowCount()>0){
        echo "<br>Número de reistros devueltos " . $registros->rowCount();
        foreach ($registros as $fila){
            echo "<br>Nombre de usuario: " . $fila["nombreusu"];
            echo "<br>Contraseña de usuario: " . $fila["password"];
        }
    
    }else{
        echo "<br>No se ha devuelto ninguna fila.";
    }
    //INSERTAR NUEVA FILA USUARIO 2 : ERROR(CIFRADO)
    $sql = "INSERT INTO 'credenciales'('nombreusu', 'password') VALUES ('usuarioborrar','$2y$10$' + 'IemVDpJtGQYDg2nHveIPYu9Cl.TfDOo0sNqMCYni9FR.0RyeDltFS')";
    
    //ACTUALIZAR FILA
    $sql = "UPDATE 'credenciales' SET 'nombreusu' = 'usuarioborraractu',`password`='$2y$10$5CiCrElTK88/90z4REVyAu.e6tzVs4mV3X9/kTyw3.N6/sZtvBihG'";

    //BORRAR FILA EN CREDENCIALES
    $sql = "DELETE FROM 'credenciales' WHERE 'nombreusu' = 'usuarioborraractu'";
   