<?php
// para llamarlo usar: require_once '../revisarConexion.php';

// Configuración para el registro de errores
ini_set('log_errors', 1);
ini_set('error_log', '/ruta/al/archivo/de/registro/de/errores.log');

// Configuración para desactivar la visualización de errores en pantalla
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
?>
