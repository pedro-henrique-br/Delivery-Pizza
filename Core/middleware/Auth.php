<?php 

namespace Core\Middleware;

Class Auth {
  public function handle(){
    session_start();
    if(!(isset($_SESSION["id"]) && isset($_SESSION["email"]))){
      die();
    }
  }
}