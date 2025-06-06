<?php
// src/admin/dashboard.php
include_once __DIR__ . '/../../config/conexion.php';
session_start();

// 1) Verificar que el usuario esté logueado
if (!isset($_SESSION['user_id'])) {
    header('Location: ../pages/login.php');
    exit;
}

// 2) Definir el título (opcional)
$pageTitle = 'Manuales';

// 3) Capturar el contenido propio del dashboard

$sql = "SELECT m.*, p.nombre as producto_nombre FROM manuales m
        JOIN productos p ON m.producto_id = p.id
        ORDER BY m.id DESC";
// Puedes ajustar la consulta según tus necesidades, por ejemplo, filtrando por producto_id o tipo
$result = mysqli_query($con, $sql);

ob_start();
?>
<!-- -- Tabla de manuales por producto o versión
CREATE TABLE manuales (
    id SERIAL PRIMARY KEY,
    producto_id INT,
    titulo VARCHAR(150) NOT NULL,
    url_manual TEXT NOT NULL,
    tipo VARCHAR(50) DEFAULT 'VIDEO', -- o VIDEO, etc.
    FOREIGN KEY (producto_id) REFERENCES productos(id)
); -->
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Manuales</h1>

    <div class="mb-4">
        <a href="manuales_create.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Agregar Manual</a>
    </div>

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200">ID</th>
                <th class="py-2 px-4 border-b border-gray-200">Producto ID</th>
                <th class="py-2 px-4 border-b border-gray-200">Título</th>
                <!-- <th class="py-2 px-4 border-b border-gray-200">URL Manual</th> -->
                <th class="py-2 px-4 border-b border-gray-200">Tipo</th>
                <th class="py-2 px-4 border-b border-gray-200">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['producto_nombre']) . "</td>";
                echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['titulo']) . "</td>";
                // echo "<td class='py-2 px-4 border-b border-gray-200'><a href='" . htmlspecialchars($row['url_manual']) . "' class='text-blue-500 hover:underline'>" . htmlspecialchars($row['url_manual']) . "</a></td>";
                echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['tipo']) . "</td>";
                echo "<td class='py-2 px-4 border-b border-gray-200'>";
                echo "<a href='manuales_update.php?id=" . $row['id'] . "' class='text-blue-500 hover:underline'>Editar</a> | ";
                echo "<a href='manuales_delete.php?id=" . $row['id'] . "' class='text-red-500 hover:underline'>Eliminar</a>";
                echo "</td>";
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
