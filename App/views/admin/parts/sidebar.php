<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
  <div class="h-screen w-52 bg-[#FF6200] text-white flex flex-col justify-between">
    <img class="mx-auto h-20 w-auto" src="../../assets/images/pizza-logo.png" alt="Paradiso Pizzaria logo">   <!-- Navigation Links -->
    
    <nav class="flex flex-col mt-4 ">
      <a href="/admin/home" class="nav-link flex items-center px-4 py-2 text-white hover:text-gray-300
          <?php echo str_contains($_SERVER['PHP_SELF'],  '/admin/home')  ? 'border-l-4 border-white' : ''; ?>">
        <i class="fas fa-home mr-3"></i> Início
      </a>
      <a href="/admin/products" class="nav-link flex items-center px-4 py-2 text-white hover:text-gray-300
          <?php echo str_contains($_SERVER['PHP_SELF'], '/admin/products') ? 'border-l-4 border-white' : ''; ?>">
        <i class="fas fa-box mr-3"></i> Produtos
      </a>
      <a href="/admin/settings" class="nav-link flex items-center px-4 py-2 text-white hover:text-gray-300 
          <?php echo str_contains($_SERVER['PHP_SELF'], '/admin/settings')  ? 'border-l-4 border-white' : ''; ?>">
        <i class="fas fa-cogs mr-3"></i> Configurações
      </a>
    </nav>

    <div class="p-4">
      <a href="/logout" class="flex items-center px-4 py-2 text-white hover:text-gray-300 logout">
        <i class="fas fa-sign-out-alt mr-3"></i> Logout
       </a>
    </div>
  </div>

  </div>
  <script>
   
  </script>
</body>
</html>
