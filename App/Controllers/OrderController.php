<?php

namespace App\Controllers;
use App\Models\Products;

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
      case "/user/order":
        $this->newOrder();
        break;
      case "/user/cart":
        $this->getUserCart();
        break;
    }
  }

  public function __construct($model) {

  }

  public static function newOrder () {
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["product_id"])){
      $orderId = $_POST["product_id"];
      $product = (new Products())->getProduct("id", "i", $orderId);
      require '../app/views/client/auth/newOrder.php';
    }
  }

  public function getUsersOrders () {
    require '../app/views/client/auth/orders.php';
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
