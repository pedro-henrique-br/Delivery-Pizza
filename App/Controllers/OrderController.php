<?php

namespace App\Controllers;

class OrderController {
  public $order;

  public function __construct($model) {

  }

  public static function createOrder () {
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])){
      echo $_POST["id"];
    }
  }
}

OrderController::createOrder();