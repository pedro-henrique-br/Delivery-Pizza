<?php 
    class ServiceContainer {
    private array $services = [];

    public function register(string $name, callable $definition): void {
        $this->services[$name] = $definition;
    }

    public function get(string $name) {
        if (!isset($this->services[$name])) {
            throw new Exception("Serviço {$name} não encontrado no container.");
        }

        if (is_callable($this->services[$name])) {
            $this->services[$name] = $this->services[$name]($this);
        }

        return $this->services[$name];
    }
}

$container = new ServiceContainer();

$container->register('userModel', function () {
    return new \Models\User();
});

$container->register('productsModel', function () {
    return new \Models\Products();
});

$container->register('orderModel', function () {
    return new \Models\Order();
});

$container->register('authController', function ($container) {
    return new \App\Controllers\AuthController(
       $container->get('userModel'),
    );
});

$container->register('adminController', function ($container) {
    return new \App\Controllers\AdminController(
       $container->get('userModel'),
    );
});

$container->register('oderController', function ($container) {
    return new \App\Controllers\OrderController(
       $container->get('orderModel'),
    );
});

$container->register('productsController', function ($container) {
    require_once 'functions.php';
    return new \App\Controllers\ProductsController(
      $container->get('productsModel'),
    );
});
