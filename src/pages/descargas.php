<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Descargas</title>
  <link href="../styles/global.css" rel="stylesheet" />
  <script src="../scripts/tailwindcss.js"></script>
</head>

<body class="font-sans">
  <?php 
  include_once __DIR__ . '/../layouts/header.php';

  $sql = "SELECT * FROM versiones WHERE tipo = 'gubernamental' ORDER BY fecha_lanzamiento DESC";

  ?>

  <!-- HEADER -->
  <header class="bg-white/50 backdrop-blur sticky top-0 z-50 shadow">
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
        <a href="./manuales.php" class="text-sm/6 font-semibold text-gray-900 hover:text-indigo-600">Manuales</a>
        <a href="./productos.php" class="text-sm/6 font-semibold text-gray-900 hover:text-indigo-600">Productos</a>
        <a href="./acerca.php" class="text-sm/6 font-semibold text-gray-900 hover:text-indigo-600">Acerca
          de</a>
        <a href="./contacto.php" class="text-sm/6 font-semibold text-gray-900 hover:text-indigo-600">Contacto</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-4">
        <a href="./descargas.php"
          class="text-sm/6 font-semibold text-white hover:bg-indigo-600 bg-indigo-500 rounded-full px-3 py-1">
          Descargar <span aria-hidden="true">&rarr;</span>
        </a>
        <a href="./login.php" class="inline-flex items-center gap-1 rounded-full bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-600 px-4 py-1.5
          text-sm font-semibold text-white shadow-md transition
          hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
          </svg>
          Login
        </a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobileMenu" class="lg:hidden hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10"></div>
      <div
        class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="../../index.php" class="-m-1.5 p-1.5">
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
  <main class="p-4">
    <div class="absolute inset-x-0 -top-20 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div id="smoke"
        class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
      </div>
    </div>
    <div class="max-w-4xl mx-auto px-6 py-10">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">SIADEG Gubernamental</h1>
        <button class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 transition">Centro de
          Descargas</button>
      </div>

      <div class="bg-white rounded-lg shadow p-6 space-y-4">
        <div class="flex justify-between items-center border-gray-200 border-b pb-4">
          <span class="font-semibold">Versión SIADEG:</span>
          <span class="text-indigo-600 font-bold">V 25.01.01 : 007</span>
        </div>

        <div>
          <h2 class="font-medium text-lg mb-2">Instalador de SIADEG Gubernamental</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="#" class="block bg-gray-100 hover:bg-gray-200 text-indigo-600 p-3 rounded text-center">Servidor
              1</a>
            <a href="#" class="block bg-gray-100 hover:bg-gray-200 text-indigo-600 p-3 rounded text-center">Servidor
              2</a>
          </div>
        </div>

        <div>
          <h2 class="font-semibold text-lg mt-6 mb-3">Historial de Actualizaciones</h2>
          <ul class="text-sm text-gray-700 list-disc list-inside space-y-1">
            <li><strong>:007</strong> = 07Abr - Se amplía CN a CNM</li>
            <li><strong>:006</strong> = 07Abr - Se activa registro de CN</li>
            <li><strong>:005</strong> = 13Mar - Se puede modificar masivamente en Orden de Compra</li>
            <li><strong>:004</strong> = 04Feb - Ajuste de tamaños y formato de letra</li>
            <li><strong>:003</strong> = 29Ene - Corrección de selección de menor precio</li>
            <li><strong>:002</strong> = 22Ene - Corrección de error en NEA</li>
            <li><strong>:001</strong> = 02Ene - Sincronización con SIAF</li>
            <li><strong>:031</strong> = 30Dic - Impresión de órdenes</li>
            <li><strong>:030</strong> = 24Dic - Mensaje si proveedor está impedido</li>
          </ul>
        </div>
      </div>
    </div>
  </main>

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
  <script src="../scripts/main.js"></script>
</body>

</html>