<?php

class Login{

    protected $nombreusu = null; //se debe llamar igual a la columna
    protected $password = null;

    /*
    1. Preparar la consulta -> prepare 
    2. Establecer el modo de recuperación: FETCH_CLASS, FETCH_ASSOC
    3. Ejecutar la consulta -> execute
    4. Recupera los registros : fetch (un registro), fetchAll(recupera todos los registros)
    */

    public static function all(){
        $dsn = "mysql:host=db;dbname=demo";
        $usuario = "dbuser";
        $password = "secret";

        try{
            $db = new PDO($dsn, $usuario, $password);
            //Establece el nivel de error que muestra la conexión
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM credenciales";
            $sentencia = $db->prepare($sql);

            //Establece la forma de recuperar registros
            $sentencia->setFetchMode(PDO::FETCH_CLASS, "Login");
            $sentencia->execute();

            //1º Manera de recuperar los datos
            /*
            //Recupera los registros
            while($obj = $sentencia->fetch()){
                echo "<br>Nombre: " . $obj->nombreusu;
                echo "<br>Contraseña: " . $obj->password;
            }
            */

            //2º manera de recuperar los datps
            $sentencia->setFetchMode(PDO::FETCH_CLASS, "Login");
            //Devuelve un array de objetos
            $credenciales = $sentencia->fetchAll();

            foreach($credenciales as $dato){
                echo "<br>Nombre: " . $dato->nombreusu;
                echo "<br>Contraseña: " . $dato->password;
            }

        }catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }

}//Fin clase login

echo "<h2>Recuperando registros</h2>";
echo Login::all();