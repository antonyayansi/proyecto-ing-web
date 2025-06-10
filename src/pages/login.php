<?php
session_start();
require_once __DIR__ . '/../../config/conexion.php'; // Ajusta según tu estructura

// Si el formulario se envió, procesamos el login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Recoger y validar datos
    $correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
    $contrasena = $_POST['contrasena'] ?? '';

    if (!$correo || !$contrasena) {
        $error = "Correo y contraseña son obligatorios.";
    } else {
        // 2. Buscar usuario en la base de datos
        $sql = "SELECT id, nombre_completo, contrasena, rol FROM usuarios WHERE correo = ?";
        $stmt = mysqli_prepare($con, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $correo);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);
            mysqli_stmt_close($stmt);

            // 3. Verificar contraseña usando password_verify
            if ($user && password_verify($contrasena, $user['contrasena'])) {
                // Credenciales correctas: crear sesión y redirigir
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['nombre_completo'];
                $_SESSION['rol'] = $user['rol'];
                header('Location: ../admin/dashboard.php');
                exit;
            } else {
                $error = "Correo o contraseña incorrectos.";
            }
        } else {
            $error = "Error en la consulta: " . mysqli_error($con);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="../styles/global.css" rel="stylesheet" />
    <script src="../scripts/tailwindcss.js"></script>
</head>

<body class="font-sans">

    <!-- Cabecera -->

    <!-- CONTENIDO -->
    <!-- This is an example component -->
    <div
        class="flex items-center justify-center min-h-screen bg-gradient-to-br from-purple-900 via-indigo-800 to-indigo-500">
        <form action="login.php" method="POST"
            class="w-full max-w-lg px-10 py-8 mx-auto bg-white border rounded-lg shadow-2xl space-y-6">
            <h3 class="text-lg font-semibold">Ingrese sus credenciales</h3>
            <?php if (isset($error)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">¡Error!</strong>
                    <span class="block sm:inline"><?= htmlspecialchars($error) ?></span>
                </div>
            <?php endif; ?>
            <div>
                <label class="block py-1">Correo electrónico</label>
                <input name="correo" type="email" required
                    class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-inset ring-gray-300 font-mono" />
            </div>

            <div>
                <label class="block py-1">Contraseña</label>
                <input name="contrasena" type="password" required
                    class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-inset ring-gray-300 font-mono" />
            </div>

            <!-- Botones Ingresar y Registrarse alineados -->
            <div class="flex justify-between items-center">
                <button type="submit"
                    class="flex-1 mr-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-full shadow transition">
                    Ingresar
                </button>
                <a href="register.php"
                    class="flex-1 ml-2 bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-full shadow text-center transition">
                    Registrarse
                </a>
            </div>

            <!-- Recuperar contraseña centrado -->
            <div class="text-center">
                <a href="#" class="text-sm text-indigo-200 hover:text-indigo-100 transition">
                    Recuperar contraseña
                </a>
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