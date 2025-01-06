<?php

namespace App\Models;
use Core\Database;
class Products {

  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  public function createProduct($name, $description, $price, $filePath) {
    $result = $this->db->query('INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)', "ssss", [$name, $description, $price, $filePath]);
    return $result;
  }

  public function getAllProducts(){
    $result = $this->db->query('SELECT * FROM products');
    return $result;
  }

  public function getProduct($column, $types, $value){
    $result = $this->db->query("SELECT * FROM products WHERE `$column` = ?", $types, [$value]);
    return $result;
  }

  public function deleteProduct($types, $value){
    $result = $this->db->query('DELETE FROM products WHERE id = ?', $types, [$value]);
    return $result;
  }

  public function updateProduct($colums = [], $types, $value){
    $result = $this->db->query('UPDATE products SET ContactName = ?, City= ? WHERE id = ?', $types, [$value]);
    return $result;

  }
}

?>