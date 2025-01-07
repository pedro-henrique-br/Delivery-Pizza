<?php 

namespace Core\Middleware;

class CsrfMiddleware {

  public static function generate () {
    if(empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
  }

  public static function validate () {
    if((isset($_POST["csrf_token"]) && $_SESSION['csrf_token'] === $_POST["csrf_token"]) !== false) {
      require_once '../app/views/403.php';
      die();
    } 
  }
}