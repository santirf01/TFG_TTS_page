<?php
include 'conexion.php'; // Incluir el archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos enviados desde el formulario
    $opcion_pregunta1 = $_POST['opcion_pregunta1'];
    // Recoge más datos si tienes más preguntas y opciones
    $opcion_pregunta2 = $_POST['opcion_pregunta2'];
    $opcion_pregunta3 = $_POST['opcion_pregunta3'];
    $opcion_pregunta4 = $_POST['opcion_pregunta4'];
    // Guardar los datos en la base de datos
    $sql = "ALTER TABLE encuesta ADD respuesta1 INT DEFAULT '$opcion_pregunta1', ADD respuesta2 INT DEFAULT '$opcion_pregunta2', ADD respuesta3 INT DEFAULT '$opcion_pregunta3', ADD respuesta4 INT DEFAULT '$opcion_pregunta4';"
    <? $sql = "INSERT INTO tabla_encuesta (opcion_pregunta1) VALUES ('$opcion_pregunta1')";
    // Ejecutar la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Encuesta enviada correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close(); // Cerrar la conexión a la base de datos
?>
