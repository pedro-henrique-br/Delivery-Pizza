<?php

namespace Core\Middleware;

class Middleware {
  public const MAP = [
    "guest" => Guest::class,
    "auth" => Auth::class,
    "admin" => Admin::class,
    "notAuth" => NotAuth::class,
  ];

  public static function resolve($key){
    session_start();
    if(!$key){
      return;
    }
    $middleware = static::MAP[$key];
    (new $middleware)->handle();
  }
}