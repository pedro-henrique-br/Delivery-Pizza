<?php 

namespace App\Controllers;

require_once __DIR__ . '../../../Core/ServiceContainer.php';

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

class ProductsController {
    protected $authController;
    protected $productsModel;
    protected $isAdmin;

    public function __construct($productsModel) {
      $this->productsModel = new $productsModel();
    }

    public function handleRequest($route) {
        switch ($route) {
            case "/menu":
                isset($_GET["input"]) ? $this->showProduct() : $this->showMenu();
                break;
            case "/admin/products":
                $this->showMenu(true);
                break;
            case "/admin/products/create":
                $this->createProduct();
                break;
            case "/admin/products/edit":
                $this->updateProduct();
                break;
            case "/admin/products/delete":
                $this->deleteProduct();
                break;
        }
    }

    private function sanitizeInput($input, $type) {
        return filter_input($type, $input, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    private function uploadImage($image) {
        $uploadFolder = 'assets/images/products/';
        $destinationPath = $uploadFolder . basename($image["name"]);

        if (!move_uploaded_file($image["tmp_name"], $destinationPath)) {
            throw new \Exception("Erro durante o upload do arquivo");
        }

        return $destinationPath;
    }

    public function showMenu($isAdmin = false) {
        $products = $this->productsModel->getAllProducts();
        require $isAdmin ? '../app/views/admin/products.php' : '../app/views/client/menu.php';
    }

    public function showProduct() {
        $input = $this->sanitizeInput('input', INPUT_GET);
        $product = $this->productsModel->getProduct("name", "s", $input)[0] ?? null;
        $error = $product ?? "Produto não encontrado no cardápio";
        require '../app/views/client/product.php';
    }

    public function createProduct() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $this->sanitizeInput("name", INPUT_POST);
            $description = $this->sanitizeInput("description", INPUT_POST);
            $price = $this->sanitizeInput("price", INPUT_POST);
            $imagePath = isset($_FILES["image"]) ? $this->uploadImage($_FILES["image"]) : null;

            $this->productsModel->createProduct($name, $description, $price, $imagePath);
            header("location: /admin/products");
            exit;
        }

        require '../app/views/admin/create-product.php';
    }

    public function updateProduct() {
        $id = $this->sanitizeInput("id", INPUT_GET);
        $product = $this->productsModel->getProduct("id", "i", $id)[0] ?? null;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $this->sanitizeInput("name", INPUT_POST);
            $description = $this->sanitizeInput("description", INPUT_POST);
            $price = $this->sanitizeInput("price", INPUT_POST);
            $imagePath = isset($_FILES["image"]) ? $this->uploadImage($_FILES["image"]) : $product['image'];

            $this->productsModel->updateProduct($id, $name, $description, $price, $imagePath);
            header("location: /admin/products");
            exit;
        }

        require '../app/views/admin/edit-product.php';
    }

    public function deleteProduct() {
        $id = $this->sanitizeInput("id", INPUT_GET);
        $this->productsModel->deleteProduct("i", $id);
        header("location: /admin/products");
        exit;
    }
}

$productController = $container->get('productsController');
$productController->handleRequest($uri);

?>
