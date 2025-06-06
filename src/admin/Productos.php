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
$pageTitle = 'Productos';


$sql = "SELECT * FROM productos";
$result = mysqli_query($con, $sql);
ob_start();


?>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Productos</h1>

    <div class="mb-4">
        <a href="producto_create.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Agregar Producto</a>
    </div>

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Descripción</th>
                <th class="py-2 px-4 border-b">Precio</th>
                <th class="py-2 px-4 border-b">Tipo</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['nombre']) . "</td>";
                echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['descripcion']) . "</td>";
                echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['precio']) . "</td>";
                echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row['tipo']) . "</td>";
                echo "<td class='py-2 px-4 border-b'>";
                echo "<a href='edit.php?id=" . $row['id'] . "' class='text-blue-500 hover:underline'>Editar</a> | ";
                echo "<a href='producto_delete.php?id=" . $row['id'] . "' class='text-red-500 hover:underline'>Eliminar</a>";
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