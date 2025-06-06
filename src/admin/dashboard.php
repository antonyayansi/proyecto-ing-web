  <?php
  // src/admin/dashboard.php
  require_once __DIR__ . '/../../config/conexion.php';
  session_start();

  // 1) Verificar que el usuario esté logueado
  if (!isset($_SESSION['user_id'])) {
    header('Location: ../pages/login.php');
    exit;
  }

  // 2) Definir el título (opcional)
  $pageTitle = 'Dashboard';

  // 3) Capturar el contenido propio del dashboard
  ob_start();
  ?>
  <!-- TODO: todo lo que iría dentro de <div class="p-4 xl:ml-80"> … -->
  <div class="container mx-auto px-4">
    <div class="mt-12">
      <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-3">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
          <div
            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M6 22q-.825 0-1.412-.587T4 20V4q0-.825.588-1.412T6 2h12q.825 0 1.413.588T20 4v16q0 .825-.587 1.413T18 22zm5-11l2.5-1.5L16 11V4h-5z" />
                                </svg>
          </div>
          <div class="p-4 text-right">
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Manuales
            </p>
            <h4
              class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
              <?php
              // Obtener el número total de manuales
              $sql = "SELECT COUNT(*) AS total FROM manuales";
              $result = mysqli_query($con, $sql);
              $row = mysqli_fetch_assoc($result);
              echo htmlspecialchars($row['total']);
              ?>  
            </h4>
          </div>
          <div class="border-t border-gray-200 p-4">
            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
              <strong class="text-green-500">+55%</strong>&nbsp; semana pasada
            </p>
          </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
          <div
            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="none" stroke="currentColor" stroke-width="2"
                d="M19 13.5v4L12 22l-7-4.5v-4m7 8.5v-8.5m6.5-5l-6.5-4L15.5 2L22 6zm-13 0l6.5-4L8.5 2L2 6zm13 .5L12 13l3.5 2.5l6.5-4zm-13 0l6.5 4l-3.5 2.5l-6.5-4z" />
            </svg>
          </div>
          <div class="p-4 text-right">
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Productos
            </p>
            <h4
              class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
              <?php
              // Obtener el número total de productos
              $sql = "SELECT COUNT(*) AS total FROM productos";
              $result = mysqli_query($con, $sql);
              $row = mysqli_fetch_assoc($result);
              echo htmlspecialchars($row['total']);
              ?>
            </h4>
          </div>
          <div class="border-t border-gray-200 p-4">
            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
              <strong class="text-green-500">+3%</strong>&nbsp; ultimo mes
            </p>
          </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
          <div
            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"
                                        d="M17 7a2 2 0 1 0 0-4a2 2 0 0 0 0 4M7 7a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0 14a2 2 0 1 0 0-4a2 2 0 0 0 0 4M7 7v10M17 7v1c0 2.5-2 3-2 3l-6 2s-2 .5-2 3v1" />
                                </svg>
          </div>
          <div class="p-4 text-right">
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
              Versiones
            </p>
            <h4
              class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
              <?php
              // Obtener el número total de versiones
              $sql = "SELECT COUNT(*) AS total FROM versiones";
              $result = mysqli_query($con, $sql);
              $row = mysqli_fetch_assoc($result);
              echo htmlspecialchars($row['total']);
              ?> 
            </h4>
          </div>
          <div class="border-t border-gray-200 p-4">
            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
              <strong class="text-red-500">-2%</strong>&nbsp; Ultimo año
            </p>
          </div>
        </div>
      </div>

      <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
        <div
          class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
          <div
            class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
            <div>
              <h6
                class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">
                Projects</h6>
              <p
                class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                  stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <strong>30 done</strong> this month
              </p>
            </div>
            <button aria-expanded="false" aria-haspopup="menu" id=":r5:"
              class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
              type="button">
              <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24" stroke-width="3"
                  stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z">
                  </path>
                </svg>
              </span>
            </button>
          </div>
          <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
            <table class="w-full min-w-[640px] table-auto">
              <thead>
                <tr>
                  <th class="border-b border-gray-200 py-3 px-6 text-left">
                    <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                      companies</p>
                  </th>
                  <th class="border-b border-gray-200 py-3 px-6 text-left">
                    <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">budget
                    </p>
                  </th>
                  <th class="border-b border-gray-200 py-3 px-6 text-left">
                    <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                      completion</p>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <div class="flex items-center gap-4">
                      <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                        Material XD Version</p>
                    </div>
                  </td>

                  <td class="py-3 px-5 border-b border-gray-200">
                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$14,000</p>
                  </td>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <div class="w-10/12">
                      <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">60%</p>
                      <div
                        class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                        <div
                          class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                          style="width: 60%;"></div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <div class="flex items-center gap-4">
                      <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Add
                        Progress Track</p>
                    </div>
                  </td>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$3,000</p>
                  </td>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <div class="w-10/12">
                      <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">10%</p>
                      <div
                        class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                        <div
                          class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                          style="width: 10%;"></div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <div class="flex items-center gap-4">
                      <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Fix
                        Platform Errors</p>
                    </div>
                  </td>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">Not set</p>
                  </td>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <div class="w-10/12">
                      <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">100%</p>
                      <div
                        class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                        <div
                          class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white"
                          style="width: 100%;"></div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <div class="flex items-center gap-4">
                      <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                        Launch our Mobile App</p>
                    </div>
                  </td>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$20,500</p>
                  </td>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <div class="w-10/12">
                      <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">100%</p>
                      <div
                        class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                        <div
                          class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white"
                          style="width: 100%;"></div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <div class="flex items-center gap-4">
                      <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Add
                        the New Pricing Page</p>
                    </div>
                  </td>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$500</p>
                  </td>
                  <td class="py-3 px-5 border-b border-gray-200">
                    <div class="w-10/12">
                      <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">25%</p>
                      <div
                        class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                        <div
                          class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                          style="width: 25%;"></div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  // Se guarda todo en $pageContent
  $pageContent = ob_get_clean();

  // 4) Incluir la plantilla general,
  // ajusta la ruta para llegar hasta views/layouts/app.php
  require_once __DIR__ . '/../../views/layouts/app.php';
