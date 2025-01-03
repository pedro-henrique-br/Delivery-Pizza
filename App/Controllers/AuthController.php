<?php

namespace App\Controllers;

require_once __DIR__ . '../../../Core/ServiceContainer.php';

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

class AuthController
{
  protected $auth;
  protected $errors = [];
  public function __construct($userModel)
  {
    $this->auth = new $userModel();
  }

  public function handleRequest($route)
  {
    switch ($route) {
      case "/login":
        $this->login();
        break;
      case "/logout":
        $this->logout();
        break;
      case "/user":
        $this->showUser();
        break;
    }
  }

  public function validate($email, $password)
  {
    if (!(isset($email) && isset($password))) {
      return $this->errors[] = "Preencha todos os campos";
    }
    return true;
  }
  public function login()
  {
    if ($this->validate($_POST["email"], $_POST["password"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
      $email = $_POST["email"];
      $password = $_POST["password"];
      $user = $this->auth->authenticate([$email])[0];
      if ($user && password_verify($password, $user["password"])) {
        session_start();
        session_regenerate_id(true);
        $_SESSION["id"] = $user["id"];
        $_SESSION["email"] = $user["email"];
          header("Location: /user");
    }
    } else {
        // (new \Core\Session)->put("errors", "Usuário sem permissão");
      }
    require_once '../app/views/client/login.php';
  }
  public static function showUser()
  {
    session_start();
    require_once '../app/views/client/user.php';
  }
  public static function logout()
  {
    session_start();
    session_destroy();
    require_once '../App/views/destroy.php';
    die();
  }
}

$authController = $container->get("authController");
$authController->handleRequest($uri);
