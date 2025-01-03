<?php 

$router = new Core\Router;

// client
$router->get("/", "../app/views/client/home.php")->only("guest");
$router->get("/login", '../app/controllers/AuthController.php')->only("guest");
$router->post("/login", '../app/controllers/AuthController.php')->only("guest");
$router->get("/user", '../app/controllers/AuthController.php')->only("auth");
$router->get("/menu", '../app/controllers/ProductsController.php')->only("guest");
$router->post("/menu", '../app/controllers/OrderController.php')->only("auth");
$router->post("/", '../app/controllers/OrderController.php')->only("auth");
$router->post("/logout", "../app/controllers/AuthController.php")->only("auth");

// admin
$router->get("/admin", '../app/controllers/AdminController.php')->only("guest");
$router->post("/admin", '../app/controllers/AdminController.php')->only("guest");
$router->get("/admin/home", '../app/views/admin/home.php')->only("admin");
$router->get("/admin/products", '../app/controllers/ProductsController.php')->only("admin");
$router->post("/admin/products/create", '../app/controllers/ProductsController.php')->only("admin");
$router->delete("/admin/products/delete", '../app/controllers/ProductsController.php')->only("admin");
$router->patch("/admin/products/edit", '../app/controllers/ProductsController.php')->only("admin");
$router->get("/admin/settings", '../app/views/admin/settings.php')->only("admin");
$router->post("/logout", "../app/controllers/AuthController.php")->only("admin");
