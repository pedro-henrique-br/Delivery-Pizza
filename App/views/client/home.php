<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Paradiso Pizzaria</title>
</head>

<body class="flex flex-col overflow-x-hidden">
  <!-- Navbar -->
  <?php require 'parts/navbar.php' ?>

  <!-- Main Section -->
  <main style="min-height: 70vh;" class="flex flex-col justify-center flex-grow py-12">
    <section class="flex flex-col lg:flex-row items-center justify-between w-5/6 mx-auto gap-12 xl:gap-x-32">
      <div style="min-width: 500px; width: 500px" class="h-auto text-start">
        <h2 class="text-4xl font-bold">A <span style="color: #FF6200">Melhor Pizza</span> Da Região<br>Faça Já o seu pedido</h2>
        <p class="mt-4 text-lg text-gray-600">
          A melhor pizza da cidade, com ingredientes deliciosos, atendimento personalizado e muito mais.
        </p>
        <a href="menu">
          <button style="background: #FF6200" class="mt-6 text-white py-2 px-4 rounded hover:bg-red-700 transition">
            Menu
          </button>
        </a>
      </div>
      <img
        id="hide"
        style="height: 55vh;"
        class="w-auto rounded-lg max-w-screen-md"
        src="/assets/images/pizza-home.png"
        alt="Pizza" />
    </section>
  </main>

  <!-- Location Section -->
  <section style="min-height: 80vh;" class="location-section bg-gray-100 py-12 flex justify-center">
    <div class="container mx-auto text-center">
      <h3 class="text-3xl font-bold mb-4">Encontre-nos</h3>
      <p class="text-lg text-gray-600">
        Nossa pizzaria está localizada no coração da cidade, pronta para atender você!
      </p>
      <div class="mt-6">
        <iframe src="https://www.google.com/maps/embed?..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>

  <?php require 'parts/footer.php' ?>

  <style>
    @media screen and (max-width: 1280px) {
      #hide {
        max-height: 350px;
        width: 350px;
      }
    }
  </style>
</body>
</html>
