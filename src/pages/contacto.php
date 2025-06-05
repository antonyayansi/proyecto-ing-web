<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto</title>
  <link href="../styles/global.css" rel="stylesheet" />
  <script src="../scripts/tailwindcss.js"></script>
</head>

<body class="font-sans">

  <!-- Cabecera -->
  <header class="bg-white sticky top-0 z-50 border-b border-gray-200">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="../../index.php" class="-m-1.5 p-1.5">
          <span class="sr-only">SIADEG</span>
          <img class="h-10 w-auto" src="../img/logo-siadeg.webp" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button id="openMenu" type="button"
          class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Abrir menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="./manuales.php"
          class="text-sm/6 font-semibold text-gray-900 hover:text-indigo-600">Manuales</a>
        <a href="./productos.php"
          class="text-sm/6 font-semibold text-gray-900 hover:text-indigo-600">Productos</a>
        <a href="./acerca.php" class="text-sm/6 font-semibold text-gray-900 hover:text-indigo-600">Acerca
          de</a>
        <a href="./contacto.php"
          class="text-sm/6 font-semibold text-gray-900 text-indigo-600">Contacto</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="./descargas.php"
          class="text-sm/6 font-semibold text-white hover:bg-indigo-600 bg-indigo-500 rounded-full px-3 py-1">Descargar
          <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobileMenu" class="lg:hidden hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10"></div>
      <div
        class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">SIADEG</span>
            <img class="h-8 w-auto" src="../img/logo-siadeg.webp" alt="">
          </a>
          <button id="closeMenu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Cerrar menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="./manuales.php"
                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Manuales</a>
              <a href="./productos.php"
                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Productos</a>
              <a href="./acerca.php"
                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Acerca
                de</a>
              <a href="./contacto.php"
                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Contacto</a>
            </div>
            <div class="py-6">
              <a href="./descargas.php"
                class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">
                Descargar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- CONTENIDO -->
  <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
        <div class="mx-auto aspect-1155/678 w-[72.1875rem] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
      </div>
      <div
        class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
          marginwidth="0" scrolling="no"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3878.8021718281557!2d-71.90504!3d-13.547724!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5d9f35d234b%3A0x808c0b2b501e27de!2sSIADEG%20E.I.R.L.!5e0!3m2!1ses-419!2spe!4v1746154170008!5m2!1ses-419!2spe"
          ></iframe>
        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">SIADEG E.I.R.L</h2>
            <p class="mt-1">C. P. El Vallecito D-17, Av. Huanacaure, Cusco</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
            <a class="text-indigo-500 leading-relaxed">ventas@siadeg.com</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">Telefono</h2>
            <p class="leading-relaxed">+51900132386</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 bg-white px-6 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contactanos</h2>
        <p class="leading-relaxed mb-5 text-gray-600">
          Contactanos para más información sobre nuestros productos y servicios.
        </p>
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600">Nombre</label>
          <input type="text" id="name" name="name"
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Correo</label>
          <input type="email" id="email" name="email"
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Mensaje</label>
          <textarea id="message" name="message"
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button
          class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Enviar</button>
        <p class="text-xs text-gray-500 mt-3">
          No compartiremos su información con terceros.
        </p>
      </div>
    </div>
  </section>

  <!-- Pie de pagina -->
  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img class="h-10 w-auto" src="../img/logo-siadeg.webp" alt="">
        <span class="ml-3 text-xl">Siadeg</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
        2025 Siadeg
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a href="https://es-la.facebook.com/noe.siadeg" target="_blank" class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a href="https://x.com/ncmtech" target="_blank" class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path
              d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
            </path>
          </svg>
        </a>
      </span>
    </div>
  </footer>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const openBtn = document.getElementById("openMenu");
        const closeBtn = document.getElementById("closeMenu");
        const mobileMenu = document.getElementById("mobileMenu");

        openBtn.addEventListener("click", function () {
            mobileMenu.classList.remove("hidden");
        });

        closeBtn.addEventListener("click", function () {
            mobileMenu.classList.add("hidden");
        });
    });
</script>
</body>
</html>