<?php
session_start();
require_once __DIR__ . '/../../config/conexion.php'; // ajusta la ruta si es diferente

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Recoger datos del formulario
    $nombre = trim($_POST['nombre_completo'] ?? '');
    $dni = trim($_POST['dni'] ?? '');
    $correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
    $contrasena = $_POST['contrasena'] ?? '';
    $institucion = trim($_POST['institucion'] ?? '');

    // 2. Validar campos obligatorios
    if (empty($nombre) || empty($dni) || !$correo || empty($contrasena)) {
        $error = "Por favor completa todos los campos obligatorios.";
    } else {
        // 3. Verificar que el correo no esté registrado
        $sqlCheck = "SELECT id FROM usuarios WHERE correo = ?";
        $stmtCheck = mysqli_prepare($con, $sqlCheck);
        mysqli_stmt_bind_param($stmtCheck, 's', $correo);
        mysqli_stmt_execute($stmtCheck);
        mysqli_stmt_store_result($stmtCheck);

        if (mysqli_stmt_num_rows($stmtCheck) > 0) {
            $error = "El correo ya está registrado.";
        }
        mysqli_stmt_close($stmtCheck);

        // 4. Si no hay error, hashear contraseña e insertar nuevo usuario
        if (empty($error)) {
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);

            $sqlIns = "INSERT INTO usuarios (nombre_completo, dni, correo, contrasena, institucion) 
                        VALUES (?, ?, ?, ?, ?)";
            $stmtIns = mysqli_prepare($con, $sqlIns);
            mysqli_stmt_bind_param($stmtIns, 'sssss', $nombre, $dni, $correo, $hash, $institucion);
            $ok = mysqli_stmt_execute($stmtIns);
            mysqli_stmt_close($stmtIns);

            if ($ok) {
                header('Location: login.php?registered=1');
                exit;
            } else {
                $error = "Error al registrar el usuario: " . mysqli_error($con);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrarse</title>
    <link href="../styles/global.css" rel="stylesheet" />
    <script src="../scripts/tailwindcss.js"></script>
</head>

<body class="font-sans">

    <!-- Cabecera -->

    <!-- CONTENIDO -->
    <!-- This is an example component -->
    <div
        class="flex items-center justify-center min-h-screen from-purple-900 via-indigo-800 to-indigo-500 bg-gradient-to-br">
        <form action="register.php" method="POST"
            class="w-full max-w-lg px-10 py-8 mx-auto bg-white border rounded-lg shadow-2xl space-y-4">
            <h3 class="text-lg font-semibold">Registrar nuevo usuario</h3>
            <a href="login.php" class="inline-flex items-center text-indigo-600 hover:text-indigo-800"
                aria-label="Volver al Login">
                <!-- Icono de flecha izquierda -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <span class="text-sm font-medium">Volver</span>
            </a>

            <!-- Nombre completo -->
            <div>
                <label class="block py-1">Nombre completo</label>
                <input name="nombre_completo" type="text" required
                    class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-gray-300 font-mono" />
            </div>

            <!-- DNI -->
            <div>
                <label class="block py-1">DNI</label>
                <input name="dni" type="text" maxlength="8" required
                    class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-gray-300 font-mono" />
            </div>

            <!-- Correo electrónico -->
            <div>
                <label class="block py-1">Correo electrónico</label>
                <input name="correo" type="email" required
                    class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-gray-300 font-mono" />
            </div>

            <!-- Contraseña -->
            <div>
                <label class="block py-1">Contraseña</label>
                <input name="contrasena" type="password" required
                    class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-gray-300 font-mono" />
            </div>

            <!-- Institución -->
            <div>
                <label class="block py-1">Institución</label>
                <input name="institucion" type="text"
                    class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-gray-300 font-mono" />
            </div>

            <!-- Botón Registrar -->
            <div class="flex gap-3 pt-3 items-center">
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-full shadow">
                    Registrarme
                </button>
            </div>
        </form>
    </div>


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
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a href="https://x.com/ncmtech" target="_blank" class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
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
    <script src="../scripts/main.js"></script>
</body>

</html>