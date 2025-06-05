<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manuales</title>
  <link href="../styles/global.css" rel="stylesheet" />
  <script src="../scripts/tailwindcss.js"></script>
</head>

<body class="font-sans">
  <?php
  // Incluir el archivo de conexión a la base de datos
  include_once '../../config/conexion.php';

  $productos = [];
  $query = "SELECT p.tipo as tipo_producto, m.*
            FROM manuales m
            JOIN productos p ON p.id = m.producto_id;";

  $resultado = mysqli_query($con, $query);

  if ($resultado) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
      $productos[] = $fila;
    }
  } else {
    echo "Error en la consulta: " . mysqli_error($con);
  }
  mysqli_close($con);

  ?>
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
        <a href="./manuales.php" class="text-sm/6 font-semibold text-gray-900 text-indigo-600">Manuales</a>
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
  <section class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">Manuales</h2>
        <p class="mt-2 text-lg/8 text-gray-600">
          Aquí encontrarás los manuales de usuario de SIADEG, donde podrás aprender a utilizar todas las funcionalidades
          del sistema.
        </p>
      </div>
      <div
        class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <?php foreach ($productos as $producto): ?>
                <article class="flex max-w-xl flex-col items-start justify-between">
                  <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="<?= $producto['fecha'] ?>" class="text-gray-500"><?= $producto['fecha'] ?></time>
                    <a href="#"
                      class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"><?= ucfirst($producto['tipo_producto']) ?></a>
                  </div>
                  <div class="group relative">
                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                      <a>
                        <span class="absolute inset-0"></span>
                        <?= $producto['titulo'] ?>
                      </a>
                    </h3>
                  </div>
                  <?php if ($producto['tipo'] == 'VIDEO'): ?>
                          <iframe class="w-full rounded-md mt-2 h-[200px]" src="<?php echo $producto['url_manual'] ?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  <?php else: ?>
                          <div class="w-full rounded-md mt-2 h-[200px] bg-gray-100 flex items-center justify-center">

                            <a href="<?= $producto['url_manual'] ?>"
                              class="mt-2 inline-block rounded-md bg-indigo-600 px-3 py-4 text-sm font-semibold text-white hover:bg-indigo-700">
                              Descargar Manual
                            </a>
                          </div>
                  <?php endif; ?>
                </article>
        <?php endforeach; ?>
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