<?php

namespace Core;
use Core\Middleware;
class Router {
  protected $routes = [];

  public function add ($uri, $controller, $method, $middleware = null){
    $this->routes[] = [
      "uri" => $uri,
      "controller" => $controller,
      "method" => $method,
      "middleware" => $middleware
    ];
    return $this;
  }


  public function get ($uri, $controller){
    return $this->add($uri, $controller, "GET");
  }
  public function post ($uri, $controller){
    return $this->add($uri, $controller, "POST");
  }
  public function delete ($uri, $controller){
    return $this->add($uri, $controller, "DELETE");
  }
  public function put ($uri, $controller){
    return $this->add($uri, $controller, "PUT");
  }
  public function patch ($uri, $controller){
    return $this->add($uri, $controller, "PATCH");
  }
  
  public function only ($key){
    $this->routes[array_key_last($this->routes)]["middleware"] = $key;
  }
  public function route ($uri, $method){
    $found = false;
    foreach($this->routes as $route) {
      if ($uri === $route["uri"] && $route["method"] === $method) {
        $found = true;
        Middleware\Middleware::resolve($route["middleware"]);
        require $route["controller"];
      } 
    }
    if (!$found){
        $this->abort();
      }
  }


  public function abort (){
    require_once "../App/views/404.php";
  }
}

?>
