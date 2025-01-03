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
      <h1 class="text-2xl font-bold text-gray-600">
        Produtos
      </h1>
      <div class='mt-10 flex items-center justify-center gap-x-6'>
        <a href='/admin/products/create' class='px-3.5 py-2.5 text-sm font-semibold text-blue-500 underline'>Cadastrar produto</a>
      </div>
      <div id="product-list" class="mt-10 mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8 overflow-y-auto">
      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <?php foreach ($products as $product):  ?>
          <div>
          <div class="group relative">
            <img src="<?= "../" . htmlspecialchars( $product['image']) ?>" alt="<?= htmlspecialchars( $product['image']) ?>" class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75">
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
          <div class="mt-4 flex items-center justify-around gap-x-6">
              <button onclick="editItem(<?= htmlspecialchars($product['id']) ?>)">Editar produto</button>
              <form method="post">
                <input type="hidden" name="method" value="DELETE">
                <button onclick="deleteItem(<?= htmlspecialchars($product['id']) ?>)">Deletar produto</button>
              </form>
          </div>
          </div>
        <?php endforeach; ?>
    </main>

    <script>
      function editItem(id){
        response = confirm(`Deseja editar este produto? ${id}`)
        if(response){
          window.location.href = `/admin/products/edit?id=${id}`
        }
      }
     
      function deleteItem(id){
        response = confirm(`Deseja deletar este produto? ${id}`)
        if(response){
          window.location.href = `/admin/products/delete?id=${id}`
        }
      }

    </script>
</div>
</body>
</html>