<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");


$currentPage = basename($_SERVER['PHP_SELF']);
$activeBg = 'bg-gradient-to-tr from-blue-600 to-blue-400 text-white';
$inactiveBg = 'text-white hover:bg-white/10 active:bg-white/30';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $pageTitle ?? 'Panel de Control' ?></title>
    <link href="../styles/global.css" rel="stylesheet" />
    <script src="../scripts/tailwindcss.js"></script>
</head>

<body class="font-sans">
    <!-- component -->
    <div class="min-h-screen bg-gray-50/50">
        <aside
            class="bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0">
            <div class="relative border-b border-white/20">
                <a class="flex items-center gap-4 py-6 px-8 text-white" href="#/">
                    Hola, <strong><?= strtoupper(htmlspecialchars($_SESSION['user_name'])) ?></strong>
                </a>
                <button
                    class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden"
                    type="button">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="m-4">
                <ul>
                    <!-- BOTÓN DASHBOARD -->
                    <li>
                        <a href="dashboard.php">
                            <button class="middle none font-sans font-bold transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none
               text-xs py-3 rounded-lg w-full flex items-center gap-4 px-4 capitalize
               <?= ($currentPage === 'dashboard.php') ? $activeBg : $inactiveBg ?>">
                                <!-- Icono de Dashboard -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 
                   101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 
                   8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                    <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 
                   1.035-.84 1.875-1.875 1.875H15a.75.75 0 
                   01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 
                   00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 
                   1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 
                   00.091-.086L12 5.43z" />
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium">
                                    Dashboard
                                </p>
                            </button>
                        </a>
                    </li>

                    <!-- BOTÓN MIS PRODUCTOS -->
                    <li>
                        <a href="productos.php">
                            <button class="middle none font-sans font-bold transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none
             text-xs py-3 rounded-lg w-full flex items-center gap-4 px-4 capitalize
             <?= ($currentPage === 'productos.php') ? $activeBg : $inactiveBg ?>">
                                <!-- SVG de productos -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-width="2"
                                        d="M19 13.5v4L12 22l-7-4.5v-4m7 8.5v-8.5m6.5-5l-6.5-4L15.5 2L22 6zm-13 0l6.5-4L8.5 2L2 6zm13 .5L12 13l3.5 2.5l6.5-4zm-13 0l6.5 4l-3.5 2.5l-6.5-4z" />
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium">
                                    Mis productos
                                </p>
                            </button>
                        </a>
                    </li>
                    <li>
                        <a href="manuales.php">
                            <button class="middle none font-sans font-bold transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none
               text-xs py-3 rounded-lg w-full flex items-center gap-4 px-4 capitalize
               <?= ($currentPage === 'manuales.php') ? $activeBg : $inactiveBg ?>">
                                <!-- Icono de Certificado / Medalla (puedes cambiarlo por cualquier otro SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M6 22q-.825 0-1.412-.587T4 20V4q0-.825.588-1.412T6 2h12q.825 0 1.413.588T20 4v16q0 .825-.587 1.413T18 22zm5-11l2.5-1.5L16 11V4h-5z" />
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium">
                                    Manuales
                                </p>
                            </button>
                        </a>
                    </li>

                    <!-- OTROS BOTONES (tablas, notificaciones, etc.) -->
                    <li>
                        <a href="versiones.php">
                            <button class="middle none font-sans font-bold transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none
               text-xs py-3 rounded-lg w-full flex items-center gap-4 px-4 capitalize
               <?= ($currentPage === 'versiones.php') ? $activeBg : $inactiveBg ?>">
                                <!-- Aquí tu SVG de “tablas” -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"
                                        d="M17 7a2 2 0 1 0 0-4a2 2 0 0 0 0 4M7 7a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0 14a2 2 0 1 0 0-4a2 2 0 0 0 0 4M7 7v10M17 7v1c0 2.5-2 3-2 3l-6 2s-2 .5-2 3v1" />
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium">
                                    Versiones
                                </p>
                            </button>
                        </a>
                    </li>

                    <!-- Separador: una línea ligeramente opaca con algo de margen arriba/abajo -->
                    <li aria-hidden="true" class="mt-2 mb-2">
                        <div class="border-t border-gray-200 border-white/20"></div>
                    </li>

                    <!-- BOTÓN CERRAR SESIÓN (no necesita activo/inactivo) -->
                    <li>
                        <a href="logout.php">
                            <button
                                class="middle none font-sans font-bold transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none
             text-xs py-3 rounded-lg w-full flex items-center gap-4 px-4 capitalize text-white hover:bg-white/10 active:bg-white/30">
                                <!-- SVG de “cerrar sesión” -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z"/></svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium">
                                    Cerrar Sesión
                                </p>
                            </button>
                        </a>
                    </li>

                </ul>
            </div>
        </aside>
        <div class="p-4 xl:ml-80">
            <nav
                class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
                <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                    <div class="capitalize">
                        <nav aria-label="breadcrumb" class="w-max">
                            <ol
                                class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                                <li
                                    class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                    <a href="#">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">
                                            dashboard</p>
                                    </a>
                                    <span
                                        class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                                </li>
                                <li
                                    class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                        home</p>
                                </li>
                            </ol>
                        </nav>
                        <h6
                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                            home</h6>
                    </div>
                </div>
            </nav>
            <div class="">
                <?= $pageContent ?? '<p>Error cargando contenido.</p>' ?>
            </div>
            <div class="flex flex-col min-h-screen">


                <body class="font-sans">

                    <div class="flex flex-col min-h-screen">



                    </div>
                    <footer class="mt-auto bg-white text-gray-600 body-font border-t border-gray-200">
                        <div class="container mx-auto px-5 py-8 flex flex-col sm:flex-row items-center">
                            <a
                                class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                                <img class="h-10 w-auto" src="../img/logo-siadeg.webp" alt="Siadeg Logo">
                                <span class="ml-3 text-xl">Siadeg</span>
                            </a>
                            <p
                                class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
                                © 2025 Hecho por Anthony, Ronaldo y Saúl
                            </p>
                            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start gap-4">
                                <a href="https://es-la.facebook.com/noe.siadeg" target="_blank"
                                    class="text-gray-500 hover:text-gray-700">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                                    </svg>
                                </a>
                                <a href="https://x.com/ncmtech" target="_blank"
                                    class="text-gray-500 hover:text-gray-700">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 
                       4.48 4.48 0 00-7.86 3v1A10.66 
                       10.66 0 013 4s-4 9 5 13a11.64
                       11.64 0 01-7 2c9 5 20 0 20-11.5
                       a4.5 4.5 0 00-.08-.83A7.72 7.72 
                       0 0023 3z" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </footer>
            </div>
</body>
</body>

</html>