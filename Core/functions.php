<?php 

namespace Core;

class Functions {
  public function addProductToCart ($id, $quantity) {
    if(isset($id) && isset($quantity)){
      $quantity = $_GET["quantity"];
      $id = $_GET["product_id"];
      echo $id;
      echo $quantity;
    }
    if($quantity >= 1){
      $index = 0;
      for($index; $quantity > $index; $index++){
        $_SESSION["cart"][$id] = $id;
        $_SESSION["cart"][$quantity] = $id;
      }
    } 
  }
}