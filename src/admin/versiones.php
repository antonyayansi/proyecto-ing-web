<?php
// src/admin/dashboard.php
include_once __DIR__ . '/../../config/conexion.php';
session_start();

// 1) Verificar que el usuario esté logueado
if (!isset($_SESSION['user_id'])) {
    header('Location: ../pages/login.php');
    exit;
}

$pageTitle = 'Versiones de Productos';
// CREATE TABLE versiones (
//     id SERIAL PRIMARY KEY,
//     producto_id INT,
//     version VARCHAR(20) NOT NULL,
//     fecha_lanzamiento DATE NOT NULL,
//     url_descarga TEXT NOT NULL,
//     FOREIGN KEY (producto_id) REFERENCES productos(id)
// );

$sql = "SELECT v.*, p.nombre AS producto_nombre FROM versiones v JOIN productos p ON v.producto_id = p.id";
$result = mysqli_query($con, $sql);
ob_start();
?>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Versiones de Productos</h1>
    <a href="versiones_create.php" class="mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Agregar Nueva Versión</a>
    <table class="mt-4 min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200">ID</th>
                <th class="py-2 px-4 border-b border-gray-200">Producto ID</th>
                <th class="py-2 px-4 border-b border-gray-200">Versión</th>
                <th class="py-2 px-4 border-b border-gray-200">Fecha de Lanzamiento</th>
                <th class="py-2 px-4 border-b border-gray-200">URL de Descarga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['producto_nombre']) . "</td>";
                echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['version']) . "</td>";
                echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['fecha_lanzamiento']) . "</td>";
                echo "<td class='py-2 px-4 border-b border-gray-200'><a href='" . htmlspecialchars($row['url_descarga']) . "' class='text-blue-500 hover:underline'>Descargar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
// Se guarda todo en $pageContent
$pageContent = ob_get_clean();

// 4) Incluir la plantilla general,
// ajusta la ruta para llegar hasta views/layouts/app.php
require_once __DIR__ . '/../../views/layouts/app.php';
