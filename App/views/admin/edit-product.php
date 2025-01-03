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

    <main class="p-6 flex flex-col gap-12">
      <h1>Editar produto</h1>
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
        <button type="submit" class="flex w-full justify-center rounded-md bg-[#FF6200] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-[#FF6900] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Editar produto</button>
      </div>
      </form>
      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

        <?php if($product):  ?>
          <div class="group relative">
              <img src="<?= "../../" . htmlspecialchars( $product['image']) ?>" alt="<?= htmlspecialchars( $product['image']) ?>" class="aspect-square w-full w-[200px] rounded-md bg-gray-200 object-cover group-hover:opacity-75">
              <div class="mt-4 flex justify-between">
                <div>
                  <h3 class="text-sm text-gray-700">
                      <span aria-hidden="true" class="absolute inset-0"></span>
                      <?= htmlspecialchars($product['name']) ?>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500"><?= htmlspecialchars($product['description']) ?></p>
                </div>
                <p class="text-sm font-medium text-gray-900"><?= htmlspecialchars($product['price']) ?></p>
              </div>
            </div>
            </div>
          <?php endif; ?>
      </div>
    </main>
  </div>
</body>
</html>