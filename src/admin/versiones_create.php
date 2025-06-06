<?php
// src/admin/dashboard.php
require_once __DIR__ . '/../../config/conexion.php';


// 2) Definir el título (opcional)
$pageTitle = 'Crear Versiones';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto_id = $_POST['producto_id'] ?? '';
    $version = $_POST['version'] ?? '';
    $fecha_lanzamiento = $_POST['fecha_lanzamiento'] ?? '';
    $url_descarga = $_POST['url_descarga'] ?? '';

    // Validar los datos
    if ($producto_id && $version && $fecha_lanzamiento && $url_descarga) {
        // Insertar la nueva versión en la base de datos
        $sql = "INSERT INTO versiones (producto_id, version, fecha_lanzamiento, url_descarga) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, 'isss', $producto_id, $version, $fecha_lanzamiento, $url_descarga);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        // Redirigir a la página de versiones
        header('Location: versiones.php');
        exit;
    } else {
        echo "<p class='text-red-500'>Por favor, completa todos los campos.</p>";
    }
}
ob_start();

?>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Crear Versiones</h1>
    <form action="#" method="POST" class="mb-4">
        <div class="mb-4">
            <label for="producto_id" class="block text-sm font-medium text-gray-700">Producto</label>
            <select id="producto_id" name="producto_id" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-blue-500">
                <option value="">Seleccionar Producto</option>
                <?php
                $sql = "SELECT * FROM productos";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['nombre']) . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="version" class="block text-sm font-medium text-gray-700">Versión</label>
            <input type="text" id="version" name="version" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="fecha_lanzamiento" class="block text-sm font-medium text-gray-700">Fecha de Lanzamiento</label>
            <input type="date" id="fecha_lanzamiento" name="fecha_lanzamiento" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="url_descarga" class="block text-sm font-medium text-gray-700">URL de Descarga</label>
            <input type="url" id="url_descarga" name="url_descarga" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-blue-500">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Crear Versión</button>
    </form>
</div>

<?php
// Se guarda todo en $pageContent
$pageContent = ob_get_clean();

// 4) Incluir la plantilla general,
// ajusta la ruta para llegar hasta views/layouts/app.php
require_once __DIR__ . '/../../views/layouts/app.php';