<?php
namespace App\Models;

use PDO;
use Core\Model;

require_once '../core/Model.php';
/**
*
*/
class Login extends Model{
 
    public static function find($name){
        $db = Login::db();
        $stmt = $db->prepare('SELECT * FROM users WHERE name=:name');
        $stmt->execute(array(':name' => $name));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Login::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);

        return $user;
    }
    
}