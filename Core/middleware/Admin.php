<?php 

namespace Core\Middleware;

Class Admin {
  public function handle(){
    session_start();
    if(!(isset($_SESSION["id"]) && isset($_SESSION["email"]))){
      header("location: /");
      die();
    }
  }
}