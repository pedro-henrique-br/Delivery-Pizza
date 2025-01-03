<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">
  <header class="bg-white sticky top-0 z-50">
    <nav class="flex items-center justify-between pt-1 lg:px-24" aria-label="Global">
      <div class="flex lg:flex-1">
        <img class="h-20 w-auto" src="assets/images/pizza-logo.png" alt="Pizzaria logo">
      </div>
      <div class="flex lg:hidden">
        <button id="open-menu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

      <div class="hidden lg:flex lg:gap-x-12 items-center">
        <a href="/" class="rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Início</a>
        <a href="/menu" class="rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Menu</a>
        <a href="/about" class="rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Sobre nós</a>
        <a href="/cart"><img class="h-7 w-auto" src="assets/images/cart.png" alt="carrinho" /></a>
        <a href="/login"><img class="h-7 w-auto" src="assets/images/user.png" alt="Usuario" /></a>
      </div>
    </nav>

    <div id="mobile-menu" class="hidden fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Pizzaria</span>
          <img class="h-12 w-auto" src="assets/images/pizza-logo.png" alt="Logo">
        </a>
        <button id="close-menu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6 flex flex-col">
            <a href="/" class="rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Início</a>
            <a href="/menu" class="rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Menu</a>
            <a href="/about" class="rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Sobre nós</a>
          </div>
          <div class="py-6 flex gap-x-2">
            <a href="/cart"><img class="h-7 w-auto" src="assets/images/cart.png" alt="carrinho" /></a>
            <a href="/login"><img class="h-7 w-auto" src="assets/images/user.png" alt="Usuario" /></a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <script>
    const openMenuButton = document.getElementById('open-menu');
    const closeMenuButton = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');

    openMenuButton.addEventListener('click', () => {
      mobileMenu.classList.remove('hidden');
    });

    closeMenuButton.addEventListener('click', () => {
      mobileMenu.classList.add('hidden');
    });
  </script>
</body>
</html>
