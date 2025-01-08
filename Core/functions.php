<?php 

namespace Core;

class Functions {
  public static function addProductToCart ($id, $quantity) {
    echo $id, $quantity;
    if(session_status() === PHP_SESSION_NONE){
      session_start();
    }
    if ($quantity < 1) {
      return; 
    }
    if(!isset($_SESSION["cart"])){
      $_SESSION["cart"] = [];
    }
    if (isset($_SESSION['cart'][$id])) {
      // Se o produto já existe, atualiza a quantidade
      $_SESSION['cart'][$id]['quantity'] += $quantity;
    } else {
      // Se o produto não existe no carrinho, adiciona-o
      $_SESSION['cart'][$id] = [
        'id' => $id,
        'quantity' => $quantity
      ];
    }
  }

  public static function getCart() {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }

    return $_SESSION['cart'] ?? [];
  }
}