<?php 

namespace Core\Middleware;

Class Auth {
  public function handle(){
    if(!(isset($_SESSION["id"]) && isset($_SESSION["email"]))){
      header("location: /");
      die();
    }
  }
}