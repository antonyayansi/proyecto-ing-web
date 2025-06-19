<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Pago Exitoso</title>
    <link href="../styles/global.css" rel="stylesheet" />
    <script src="../scripts/tailwindcss.js"></script>
</head>
<body class="font-sans bg-gray-50">
<?php
// Capturar datos por GET
$header = $_GET['header'] ?? '';
$fulfillment = $_GET['fulfillment'] ?? '';
$order = $_GET['order'] ?? '';
$dataMap = $_GET['dataMap'] ?? [];

// echo json_encode([
//     'header' => $header,
//     'fulfillment' => $fulfillment,
//     'order' => $order,
//     'dataMap' => $dataMap
// ]); 

$status = $dataMap['STATUS'] ?? 'UNKNOWN';

//crear un serial aleatorio para la licencia comprada si fue exitosa
if (strtoupper($status) === 'AUTHORIZED') {
    $serial = bin2hex(random_bytes(16)); // Genera un serial aleatorio de 32 caracteres hexadecimales
    // Aquí podrías guardar el serial en la base de datos o enviarlo por correo
} else {
    $serial = null; // No se genera serial si no fue autorizado
}
// Mostrar el estado del pago
?>

<!-- Cabecera -->
<header class="bg-white shadow p-4 mb-10">
    <div class="container mx-auto flex items-center justify-between">
        <a href="../../index.php" class="flex items-center gap-2">
            <img src="../img/logo-siadeg.webp" class="h-10" alt="Logo">
            <span class="text-xl font-semibold text-indigo-600">SIADEG</span>
        </a>
    </div>
</header>

<!-- Contenido principal -->
<main class="container mx-auto text-center px-4">
    <?php if (strtoupper($status) === 'AUTHORIZED'): ?>
        <h1 class="text-3xl font-bold text-green-600 mb-4">¡Pago exitoso!</h1>
        <p class="text-lg text-gray-700 mb-6">Tu pago ha sido autorizado correctamente. Gracias por tu compra.</p>
        <?php if ($serial): ?>
            <div class="bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded mb-6">
                <strong>Serial generado:</strong> <?= htmlspecialchars($serial) ?>
            </div>
        <?php else: ?>
            <p class="text-lg text-gray-700 mb-6">No se generó un serial para esta transacción.</p>
        <?php endif; ?>
        <p class="text-sm text-gray-500 mb-6">Estado del pago: <strong><?= htmlspecialchars($status) ?></strong></p>
        <a href="../../index.php" class="inline-block bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition">Volver al inicio</a>
    <?php else: ?>
        <h1 class="text-3xl font-bold text-red-600 mb-4">Pago no procesado</h1>
        <p class="text-lg text-gray-700 mb-6">El estado del pago es: <strong><?= htmlspecialchars($status) ?></strong>. Por favor, intenta nuevamente o contacta soporte.</p>
        <a href="../../index.php" class="inline-block bg-gray-600 text-white px-6 py-2 rounded-full hover:bg-gray-700 transition">Volver al inicio</a>
    <?php endif; ?>
</main>

<!-- Pie de página -->
<footer class="mt-20 bg-white border-t border-gray-200 py-6 text-center text-sm text-gray-500">
    © 2025 SIADEG. Todos los derechos reservados.
</footer>
</body>
</html>
