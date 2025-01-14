<?php

namespace Core;

class Session {

  public function __construct() {
    session_start();
  }

  public static function put ($key, $value) {
    $_SESSION[$key] = $value;
  }
  public static function get ($key, $default = null) {
    return $_SESSION[$key] ?? $default;
  }
  public static function unset ($key) {
    unset($_SESSION[$key]);
  }
}

?>