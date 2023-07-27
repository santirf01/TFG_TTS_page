<?php
include 'conexion.php'; // Incluir el archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos enviados desde el formulario
    $opcion_pregunta1 = $_POST['opcion_pregunta1'];
    // Recoge más datos si tienes más preguntas y opciones

    // Guardar los datos en la base de datos
    $sql = "INSERT INTO tabla_encuesta (opcion_pregunta1) VALUES ('$opcion_pregunta1')";
    // Ejecutar la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Encuesta enviada correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close(); // Cerrar la conexión a la base de datos
?>
