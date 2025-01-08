<?php 

$router = new Core\Router;

// client
$router->get("/", "../app/views/client/home.php")->only("guest");
$router->get("/login", '../app/controllers/AuthController.php')->only("notAuth");
$router->post("/login", '../app/controllers/AuthController.php')->only("notAuth");
$router->get("/menu", '../app/controllers/ProductsController.php')->only("guest");
$router->post("/menu", '../app/controllers/ProductsController.php')->only("auth");

// auth
$router->get("/user/home", '../app/controllers/AuthController.php')->only("auth");
$router->get("/user/cart", "../app/controllers/orderController.php")->only("auth");
$router->get("/user/orders", "../app/controllers/orderController.php")->only("auth");
$router->post("/user/order", "../app/controllers/orderController.php")->only("auth");
$router->get("/user/settings", '../app/controllers/AuthController.php')->only("auth");
$router->get("/client/logout", "../app/controllers/AuthController.php")->only("auth");


// admin
$router->get("/admin", '../app/controllers/AdminController.php')->only("notAuth");
$router->post("/admin", '../app/controllers/AdminController.php')->only("notAuth");
$router->get("/admin/home", '../app/views/admin/home.php')->only("admin");
$router->get("/admin/products", '../app/controllers/ProductsController.php')->only("admin");
$router->get("/admin/products/create", '../app/controllers/ProductsController.php')->only("admin");
$router->post("/admin/products/create", '../app/controllers/ProductsController.php')->only("admin");
$router->delete("/admin/products/delete", '../app/controllers/ProductsController.php')->only("admin");
$router->patch("/admin/products/edit", '../app/controllers/ProductsController.php')->only("admin");
$router->get("/admin/settings", '../app/views/admin/settings.php')->only("admin");
$router->get("/logout", "../app/controllers/adminController.php")->only("admin");
