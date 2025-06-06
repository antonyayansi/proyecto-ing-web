<?php
// src/admin/dashboard.php
require_once __DIR__ . '/../../config/conexion.php';


// 2) Definir el título (opcional)
$pageTitle = 'Crear Manuales';

// -- Tabla de productos de software
// CREATE TABLE manuales (
//     id SERIAL PRIMARY KEY,
//     producto_id INT,
//     titulo VARCHAR(150) NOT NULL,
//     url_manual TEXT NOT NULL,
//     tipo VARCHAR(50) DEFAULT 'VIDEO', -- o VIDEO, etc.
//     FOREIGN KEY (producto_id) REFERENCES productos(id)
// );

$sql = "SELECT * FROM productos";
$comboProductos = mysqli_query($con, $sql);

//3) Procesar el formulario de creación de producto
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto_id = $_POST['producto_id'] ?? '';
    $titulo = $_POST['titulo'] ?? '';
    $url_manual = $_POST['url_manual'] ?? '';
    $tipo = $_POST['tipo'] ?? '';
    $imagen = $_FILES['imagen'] ?? null;

    //Validar y procesar la imagen
    if ($imagen && $imagen['error'] === UPLOAD_ERR_OK) {
        $imagenPath = 'uploads/' . basename($imagen['name']);
        move_uploaded_file($imagen['tmp_name'], $imagenPath);
    }

    //Insertar el producto en la base de datos
    $sql = "INSERT INTO manuales (producto_id, titulo, url_manual, tipo) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'isss', $producto_id, $titulo, $url_manual, $tipo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    //Redirigir a la página de productos
    header('Location: manuales.php');
    exit;
}

?>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Crear Manuales</h1>
    <form action="#" method="POST" enctype="multipart/form-data" class="mb-4">
        <div class="mb-4">
            <label for="producto_id" class="block text-sm font-medium text-gray-700">Producto ID</label>
            <select id="producto_id" name="producto_id" required class="mt-1 block w-full border border-gray-300 rounded-md p-2     focus:border-blue-500 focus:ring-blue-500">
                <option value="">Seleccione un producto</option>
                <?php while ($row = mysqli_fetch_assoc($comboProductos)) : ?>
                    <option value="<?php echo htmlspecialchars($row['id']); ?>"><?php echo htmlspecialchars($row['nombre']); ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" id="titulo" name="titulo" required class="mt-1 block w-full border border-gray-300 rounded-md p-2     focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="url_manual" class="block text-sm font-medium text-gray-700">URL del Manual</label>
            <input type="text" id="url_manual" name="url_manual" required class="mt-1 block w-full border border-gray-300 rounded-md p-2    focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
            <select id="tipo" name="tipo" class="mt-1 block w-full border border-gray-300 rounded-md p-2     focus:border-blue-500 focus:ring-blue-500">
                <option value="VIDEO">VIDEO</option>
                <option value="PDF">PDF</option>
            </select>
        </div>
        <!-- <div class="mb-4">
            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
            <input type="file" id="imagen" name="imagen" class="mt-1 block w-full border border-gray-300 rounded-md p-2  focus:border-blue-500 focus:ring-blue-500">
        </div> -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Crear Manual</button>
    </form>
</div>

<?php
// Se guarda todo en $pageContent
$pageContent = ob_get_clean();

// 4) Incluir la plantilla general,
// ajusta la ruta para llegar hasta views/layouts/app.php
require_once __DIR__ . '/../../views/layouts/app.php';