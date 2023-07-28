<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
$servername = "localhost";
$username = "encuesta_TTS";
$password = "milan430";
$dbname = "RESULTADOS";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $resultado1 = $_POST[''];
    $resultado2 = $_POST[''];
    $resultado3 = $_POST[''];
    $resultado4 = $_POST[''];
    // Obtén más respuestas de la encuesta aquí y asigna a variables.

    $sql = "INSERT INTO encuestas (nombre, edad) VALUES (:nombre, :edad)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':edad', $edad);
    // Vincula más variables y columnas de la tabla según las respuestas de la encuesta.

    $stmt->execute();

    echo "Encuesta guardada exitosamente.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
