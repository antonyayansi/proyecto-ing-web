<?php

$pageTitle = 'Inicio';

ob_start();
?>

<!-- Contenido -->
<main class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-20 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div id="smoke"
            class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-32">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div
                class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                Todos nuestro productos <a href="src/pages/productos.php" class="font-semibold text-indigo-600"><span
                        class="absolute inset-0" aria-hidden="true"></span>Leer más <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
        <div class="text-center">
            <h1 id="changing-title"
                class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl transition-opacity duration-700 ease-in-out opacity-100">
                Bienvenidos a SIADEG
            </h1>
            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Les damos la bienvenida a
                nuestra Página Web, aquí les brindaremos toda la información acerca de nuestros productos.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="src/pages/descargas.php"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Descargar</a>
                <a href="src/pages/manuales.php" class="text-sm/6 font-semibold text-gray-900">Manuales <span
                        aria-hidden="true">→</span></a>
            </div>
        </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    </div>
</main>

<!-- Sección de productos -->
<section class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pt-4 lg:pr-8">
                <div class="lg:max-w-lg">
                    <h2 class="text-base/7 font-semibold text-indigo-600">Gubernamental</h2>
                    <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">
                        Mejor flujo de trabajo</p>
                    <p class="mt-6 text-lg/8 text-gray-600">
                        Siadeg es un software de fácil uso que trabaja de forma modular y ha sido desarrollado
                        utilizando las últimas técnicas de procesamiento de datos
                    </p>
                    <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Facilidad de uso
                            </dt>
                            <dd class="inline">mediante un Sistema de red Intranet o Internet</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Seguridad
                            </dt>
                            <dd class="inline">Encriptación de datos y autenticación de usuarios</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path
                                        d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                    <path fill-rule="evenodd"
                                        d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Bases de datos
                            </dt>
                            <dd class="inline">Obtiene datos en tiempo real para una mejor toma de desiciones.</dd>
                        </div>
                    </dl>
                </div>
            </div>
            <img data-aos="fade-left" data-aos-delay="200" src="src/img/captura.png" alt="Gubernamental captura"
                class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                width="2432" height="1442">
        </div>
    </div>
</section>

<!-- Sección de despliegue -->
<section class="bg-gray-50 py-24 sm:py-32">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-center text-base/7 font-semibold text-indigo-600">Características</h2>
        <p
            class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">
            Todo lo que necesitas en un solo lugar</p>
        <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                            Aplicativo movil</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Siadeg tiene su versión
                            móvil</p>
                    </div>
                    <div class="@container relative min-h-[30rem] w-full grow max-lg:mx-auto max-lg:max-w-sm">
                        <div data-aos="flip-up" data-aos-delay="200"
                            class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                            <img class="size-full object-cover object-top" src="src/img/capturamovil.png" alt="">
                        </div>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 lg:rounded-l-[2rem]">
                </div>
            </div>
            <div class="relative max-lg:row-start-1">
                <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                            Super rápido</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            Siadeg es muy rápido y fácil de usar, lo que permite a los usuarios realizar tareas
                        </p>
                    </div>
                    <div
                        class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
                        <img data-aos="flip-up" data-aos-delay="200" class="w-full max-lg:max-w-xs"
                            src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-performance.png"
                            alt="">
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 max-lg:rounded-t-[2rem]">
                </div>
            </div>
            <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                <div class="absolute inset-px rounded-lg bg-white"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Seguro
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            Utilizamos las últimas técnicas de procesamiento de datos y encriptación para garantizar
                            la seguridad de la información.
                        </p>
                    </div>
                    <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                        <img data-aos="flip-up" data-aos-delay="200" class="h-[min(152px,40cqw)] object-cover"
                            src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-security.png" alt="">
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5"></div>
            </div>
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                </div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                            Inteligencia artifial</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            Brindamos un servicio de inteligencia artificial para ayudar a los usuarios.
                        </p>
                    </div>
                    <div class="relative min-h-[30rem] w-full grow">
                        <div
                            class="absolute top-10 right-0 bottom-0 left-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl">
                            <img data-aos="flip-up" data-aos-delay="200" class="object-cover" src="src/img/bot.png"
                                alt="">
                        </div>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de suscripción -->
<section class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
            <div class="max-w-xl lg:max-w-lg">
                <h2 class="text-4xl font-semibold tracking-tight text-white">Subscribete a nuestro boletín</h2>
                <p class="mt-6 text-lg/8 text-gray-300">Suscríbete a nuestro boletín y mantente al tanto de las
                    últimas novedades y actualizaciones de nuestros productos.</p>
                <p class="mt-6 text-lg/8 text-gray-300">Recibe información sobre nuevos productos, actualizaciones y
                    ofertas exclusivas directamente en tu bandeja de entrada.</p>
                <div class="mt-6 flex max-w-md gap-x-4">
                    <label for="email-address" class="sr-only">Correo</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required
                        class="min-w-0 flex-auto rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                        placeholder="Ingresa tu correo">
                    <button type="submit"
                        class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Suscríbete</button>
                </div>
            </div>
            <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                <div class="flex flex-col items-start">
                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>
                    </div>
                    <dt class="mt-4 text-base font-semibold text-white">Artículos semanales</dt>
                    <dd class="mt-2 text-base/7 text-gray-400">Artículos semanales sobre nuestros productos y
                        novedades.</dd>
                </div>
                <div class="flex flex-col items-start">
                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                        </svg>
                    </div>
                    <dt class="mt-4 text-base font-semibold text-white">No spam</dt>
                    <dd class="mt-2 text-base/7 text-gray-400">No recibirás correos no deseados ni publicidad
                        innecesaria.</dd>
                </div>
            </dl>
        </div>
    </div>
    <div class="absolute top-0 left-1/2 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
        <div class="aspect-1155/678 w-[72.1875rem] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
</section>

<?php
// Se guarda todo en $pageContent
$pageContent = ob_get_clean();

// 4) Incluir la plantilla general,
// ajusta la ruta para llegar hasta views/layouts/app.php
require_once __DIR__ . '/views/layouts/web.php';
