<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Produtos</title>
</head>
<body>
<div class="flex">
    <?php require 'parts/sidebar.php' ?>

    <main class="p-6">
      <form style="width: 400px;" class="space-y-6" method="POST" enctype="multipart/form-data">
      <div>
        <label for="name" class="block text-sm/6 font-medium text-gray-900">Nome da pizza</label>
        <div class="mt-2">
          <input type="text" name="name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
        </div>
        <label for="description" class="block text-sm/6 font-medium text-gray-900">Descrição</label>
        <div class="mt-2">
          <input type="text" name="description" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
        </div>
        <label for="price" class="block text-sm/6 font-medium text-gray-900">preço</label>
        <div class="mt-2">
          <input type="text" name="price" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
        </div>
        <div class="mt-2">
          <input type="file" accept="image/*" name="image" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
        </div>
      </div>
      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-[#FF6200] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-[#FF6900] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Cadastrar Item</button>
      </div>
      </form>
    </main>
  </div>
</body>
</html>