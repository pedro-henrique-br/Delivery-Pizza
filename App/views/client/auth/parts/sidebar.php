<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="flex h-screen flex">
  <div class="h-screen w-52 bg-[#FF6200] text-white flex flex-col justify-between">
    <img class="mx-auto h-20 w-auto" src="../../assets/images/pizza-logo.png" alt="Paradiso Pizzaria logo">   <!-- Navigation Links -->
    
    <nav class="flex flex-col mt-4 ">
      <a href="/user/home" class="nav-link flex items-center px-4 py-2 text-white hover:text-gray-300
          <?php echo str_contains($_SERVER['PHP_SELF'], 'home') ? 'border-l-4 border-white' : ''; ?>">
        <i class="fas fa-box mr-3"></i> Home
      </a>
      <a href="/user/cart" class="nav-link flex items-center px-4 py-2 text-white hover:text-gray-300
          <?php echo str_contains($_SERVER['PHP_SELF'], 'cart') ? 'border-l-4 border-white' : ''; ?>">
        <i class="fas fa-box mr-3"></i> Carrinho
      </a>
      <a href="/user/orders" class="nav-link flex items-center px-4 py-2 text-white hover:text-gray-300 
          <?php echo str_contains($_SERVER['PHP_SELF'], 'orders')  ? 'border-l-4 border-white' : ''; ?>">
        <i class="fas fa-cogs mr-3"></i> Pedidos
      </a>
      <a href="/user/settings" class="nav-link flex items-center px-4 py-2 text-white hover:text-gray-300 
          <?php echo str_contains($_SERVER['PHP_SELF'], 'settings')  ? 'border-l-4 border-white' : ''; ?>">
        <i class="fas fa-cogs mr-3"></i> Configurações
      </a>
    </nav>

    <div class="p-4">
      <form method="POST">
        <input type="text" name="method" value="DELETE" hidden>
        <button type="submit">
          <a href="/client/logout" class="flex items-center px-4 py-2 text-white hover:text-gray-300 logout">
            <i class="fas fa-sign-out-alt mr-3"></i> Logout
          </a>
        </button>
      </form>
    </div>
  </div>

  
</div>
</body>
</html>
