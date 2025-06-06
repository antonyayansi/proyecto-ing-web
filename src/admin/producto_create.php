<?php
// src/admin/dashboard.php
require_once __DIR__ . '/../../config/conexion.php';


// 2) Definir el título (opcional)
$pageTitle = 'Crear Productos';

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
    $nombre = $_POST['nombre'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $precio = $_POST['precio'] ?? 0;
    $tipo = $_POST['tipo'] ?? '';
    $imagen = $_FILES['imagen'] ?? null;

    //Validar y procesar la imagen
    if ($imagen && $imagen['error'] === UPLOAD_ERR_OK) {
        $imagenPath = 'uploads/' . basename($imagen['name']);
        move_uploaded_file($imagen['tmp_name'], $imagenPath);
    }

    //Insertar el producto en la base de datos
    $sql = "INSERT INTO productos (nombre, descripcion, precio, tipo, imagen) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'ssdss', $nombre, $descripcion, $precio, $tipo, $imagenPath);
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
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" id="nombre" name="nombre" required class="mt-1 block w-full border border-gray-300 rounded-md p-2     focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md p-2    focus:border-blue-500 focus:ring-blue-500"></textarea>
        </div>
        <div class="mb-4">
            <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
            <input type="number" id="precio" name="precio" step="0.01" class="mt-1 block w-full border border-gray-300 rounded-md p-2    focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
            <select id="tipo" name="tipo" class="mt-1 block w-full border border-gray-300 rounded-md p-2     focus:border-blue-500 focus:ring-blue-500">
                <option value="comercial">Comercial</option>
                <option value="gubernamental">Gubernamental</option>
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