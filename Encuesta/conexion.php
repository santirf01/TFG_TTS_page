<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "nueva_contraseña";
$dbname = "Encuesta_TTS";


// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
