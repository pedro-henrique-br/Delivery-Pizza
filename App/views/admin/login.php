<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Admin - login</title>
</head>
<body class="h-full">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-14 w-auto" src="assets/images/pizza-logo.png" alt="Paradiso Pizzaria logo">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Entrar</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

  <?php 
  echo isset($_SESSION["errors"]) ? 
    "<div class='mb-6'>
      <p class='rounded-md bg-red-50 p-4 text-sm font-semibold text-red-700'>
        {$_SESSION["errors"]}
      </p>
    </div>" 
    : "" ?>
    

    <form class="space-y-6" method="POST">
      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
        <div class="mt-2">
          <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
        </div>
      </div>
      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Senha</label>
        </div>
        <div class="mt-2">
          <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-[#FF6200] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-[#FF6900] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Sign in</button>
      </div>
      <div class='mt-10 flex items-center justify-center gap-x-6'>
        <a href='/' class='px-3.5 py-2.5 text-sm font-semibold text-blue-500 underline'>Voltar para o inicio</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>
