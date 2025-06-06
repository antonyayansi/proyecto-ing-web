<?php
// src/admin/dashboard.php
session_start();

// 1) Verificar que el usuario esté logueado
if (!isset($_SESSION['user_id'])) {
    header('Location: ../pages/login.php');
    exit;
}

// 2) Definir el título (opcional)
$pageTitle = 'Certificados';

// 3) Capturar el contenido propio del dashboard
ob_start();
?>
<!-- TODO: todo lo que iría dentro de <div class="p-4 xl:ml-80"> … -->

<?php
// Se guarda todo en $pageContent
$pageContent = ob_get_clean();

// 4) Incluir la plantilla general,
// ajusta la ruta para llegar hasta views/layouts/app.php
require_once __DIR__ . '/../../views/layouts/app.php';
