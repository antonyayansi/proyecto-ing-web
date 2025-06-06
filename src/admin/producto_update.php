<?php
// src/admin/dashboard.php
require_once __DIR__ . '/../../config/conexion.php';


// 2) Definir el título (opcional)
$pageTitle = 'Crear Productos';
$id = $_GET['id'] ?? null; 

$sql = "SELECT * FROM productos WHERE id = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if ($row = mysqli_fetch_assoc($result)) {
    $nombre = $row['nombre'];
    $descripcion = $row['descripcion'];
    $precio = $row['precio'];
    $tipo = $row['tipo'];
    $imagenPath = $row['imagen'];
} else {
    // Si no se encuentra el producto, redirigir o manejar el error
    header('Location: productos.php');
    exit;
}
ob_start();

// -- Tabla de productos de software
// CREATE TABLE productos (
//     id int AUTO_INCREMENT PRIMARY KEY,
//     nombre VARCHAR(100) NOT NULL,
//     descripcion TEXT,
//     precio decimal(10,2),
//     imagen varchar(255) null,
//     tipo enum('comercial', 'gubernamental'),
//     creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// );

//3) Procesar el formulario de creación de producto
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Asegúrate de que el ID se envíe desde el formulario si es necesario
    $nombre = $_POST['nombre'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $precio = $_POST['precio'] ?? 0;
    $tipo = $_POST['tipo'] ?? '';
    $imagen = $_FILES['imagen'] ?? null;

    //Insertar el producto en la base de datos
    $sql = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, tipo = ?, imagen = ? WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'ssdssi', $nombre, $descripcion, $precio, $tipo, $imagenPath, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    //Redirigir a la página de productos
    header('Location: productos.php');
    exit;
}

?>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Productos</h1>
    <form action="#" method="POST" enctype="multipart/form-data" class="mb-4">
        <input type="hidden" name="id" value="<?php echo isset($id) ? htmlspecialchars($id) : ''; ?>">
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo isset($nombre) ? htmlspecialchars($nombre) : ''; ?>" required class="mt-1 block w-full border border-gray-300 rounded-md p-2     focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md p-2    focus:border-blue-500 focus:ring-blue-500"><?php echo isset($descripcion) ? htmlspecialchars($descripcion) : ''; ?></textarea>
        </div>
        <div class="mb-4">
            <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
            <input type="number" id="precio" name="precio" step="0.01" value="<?php echo isset($precio) ? htmlspecialchars($precio) : ''; ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2    focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
            <select id="tipo" name="tipo" class="mt-1 block w-full border border-gray-300 rounded-md p-2     focus:border-blue-500 focus:ring-blue-500">
                <option value="comercial" <?php echo (isset($tipo) && $tipo === 'comercial') ? 'selected' : ''; ?>>Comercial</option>
                <option value="gubernamental" <?php echo (isset($tipo) && $tipo === 'gubernamental') ? 'selected' : ''; ?>>Gubernamental</option>
            </select>
        </div>
        <!-- <div class="mb-4">
            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
            <input type="file" id="imagen" name="imagen" class="mt-1 block w-full border border-gray-300 rounded-md p-2  focus:border-blue-500 focus:ring-blue-500">
        </div> -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Crear Producto</button>
    </form>
</div>

<?php
// Se guarda todo en $pageContent
$pageContent = ob_get_clean();

// 4) Incluir la plantilla general,
// ajusta la ruta para llegar hasta views/layouts/app.php
require_once __DIR__ . '/../../views/layouts/app.php';