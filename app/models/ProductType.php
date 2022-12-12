<?php
namespace App\Models;

use PDO;
use Core\Model;

require_once '../core/Model.php';
/**
*
*/
class ProductType extends Model{
 
      
    public static function all(){
        $db = ProductType::db();
        $statement = $db->query('SELECT * FROM product_types');
        $product_type = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $product_type;
    }

    public static function find($id){
        $db = ProductType::db();
        $stmt = $db->prepare('SELECT * FROM product_types WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $product_type = $stmt->fetch(PDO::FETCH_CLASS);

        return $product_type;
    }

    public function insert(){
        $db = ProductType::db();
        $stmt = $db->prepare('INSERT INTO product_types(name) VALUES(:name)');
        $stmt->bindValue(':name', $this->name);

        return $stmt->execute();
    }

    public function delete(){
        $db = ProductType::db();
        $stmt = $db->prepare('DELETE FROM product_types WHERE id = :id');
        $stmt->bindValue(':id', $this->id);

        return $stmt->execute();
    }

    public function save(){
        $db = ProductType::db();
        $stmt = $db->prepare('UPDATE product_types SET name = :name WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);

        return $stmt->execute();
    }

    public function __get($atributoDesconocido){
        // return "atributo $atributoDesconocido desconocido";
        if (method_exists($this, $atributoDesconocido)) {
            $this->$atributoDesconocido = $this->$atributoDesconocido();
            return $this->$atributoDesconocido;
            // echo "<hr> atributo $x <hr>";
        }
    }

    public function products(){
        //un producto pertenece a un tipo:
        $db = ProductType::db();
        $statement = $db->prepare('SELECT * FROM products WHERE type_id = :type_id');
        $statement->bindValue(':type_id', $this->id);
        $statement->execute();
        $product_type = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $product_type;
    }
}