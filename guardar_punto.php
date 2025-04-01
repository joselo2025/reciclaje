<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_punto = $_POST['nombre_punto'];
    $numero_contacto = $_POST['numero_contacto'];
    $tipo_residuo = $_POST['tipo_residuo'];
    $fecha_recoleccion = $_POST['fecha_recoleccion'];
    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];

    $conn = new mysqli('localhost', 'root', '', 'reciclaje');

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "INSERT INTO puntos_recoleccion (nombre_punto, numero_contacto, tipo_residuo, fecha_recoleccion, latitud, longitud)
            VALUES ('$nombre_punto', '$numero_contacto', '$tipo_residuo', '$fecha_recoleccion', '$latitud', '$longitud')";

    if ($conn->query($sql) === TRUE) {
        echo "Punto de recolección guardado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
