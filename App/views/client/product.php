<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
</head>

<body>
  <?php require 'parts/navbar.php' ?>

  <main style="height: 90vh;" class="flex flex-col items-center justify-start mt-24">
    <form method="get" class="w-full max-w-lg">
      <div>
        <label for="menu" class="block text-md font-semibold text-gray-900">
          Busque por uma pizza do nosso menu
        </label>
        <div class="mt-2">
          <input type="text" name="input" placeholder="Ex: Calabresa" name="pizza" id="pizza" required
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-blue-600">
        </div>
      </div>
      <button style="background: #FF6200"
        class="mt-4 w-full text-white py-2 px-4 rounded hover:bg-red-700 transition">
        Buscar
      </button>
    </form>

    <div id="product-list" class="mt-10 mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8 overflow-y-auto">
    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <?php if ($product) : ?>
          <div>
          <div class="group relative">
          <img src="<?= htmlspecialchars($product['image']) ?>" alt="" class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <p>
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    <?= htmlspecialchars($product['name']) ?>
                  </p>
                </h3>
                <p class="mt-1 text-sm text-gray-500"><?= htmlspecialchars($product['description']) ?></p>
              </div>
              <p class="text-sm font-medium text-gray-900"><?= htmlspecialchars($product['price']) ?></p>
            </div>
          </div>
          <div class="button-container pt-2">
            <form method="post">
              <input name="id" type="text" hidden value="<?php $product["id"] ?>">
              <button type="submit" class="flex w-1/4 justify-center rounded-md bg-[#FF6200] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-[#FF6900] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Adicionar</button>
            </form>
          </div>
          </div>
        <?php endif ?>
      </div>
    </div>
    <?php if ($error !== "" && empty($requestProduct)) : ?>
      <div class='mb-6'>
        <p class='rounded-md bg-red-50 p-4 text-sm font-semibold text-red-700'>
        <?= htmlspecialchars(string: $error)?>
        </p>
      </div>
    <?php endif ?>
  </main>
  <?php require 'parts/footer.php' ?>

</body>
</html>