<?php 

namespace Core\Middleware;

Class NotAuth {
  public function handle(){
    if(isset($_SESSION["id"]) && isset($_SESSION["email"])){
      $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
      if(str_contains($uri, "login")){
        header("location: /user/home");
        die();
      } else if (str_contains($uri, "admin")){
        header("location: /admin/home");
        die();
      }
    } 
  }
}