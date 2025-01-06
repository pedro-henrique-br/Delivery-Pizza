<?php

namespace App\Controllers;

require_once __DIR__ . '../../../Core/ServiceContainer.php';

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

class OrderController {
  public $order;

  public function handleRequest($route)
  {
    switch ($route) {
      case "/user/orders":
        $this->getUserOrders();
        break;
      case "/user/cart":
        $this->getUserCart();
        break;
    }
  }

  public function __construct($model) {

  }

  public static function newOrder () {
    if($_SERVER["REQUEST_METHOD"] === "POST"){
      echo $_POST["id"];
    }
  }

  public function getUserOrders () {
    require '../app/views/client/auth/orders.php';
  }
  public function getUserCart () {
    require '../app/views/client/auth/cart.php';
  }
}

$orderController = new OrderController($container);
$orderController->handleRequest($uri);
