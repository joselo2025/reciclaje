<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Reciclaje</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>
<body>
    <div class="container">
        <h1>Gestión de Recolección y Reciclaje</h1>
        <form action="guardar_punto.php" method="POST">
            <label for="nombre_punto">Nombre del Punto:</label>
            <input type="text" id="nombre_punto" name="nombre_punto" required>

            <label for="numero_contacto">Número de Contacto:</label>
            <input type="text" id="numero_contacto" name="numero_contacto" required>

            <label for="tipo_residuo">Tipo de Residuo:</label>
            <input type="text" name="tipo_residuo" placeholder="Tipo de residuo" required>

            <label for="fecha_recoleccion">Fecha de Recolección:</label>
            <input type="date" id="fecha_recoleccion" name="fecha_recoleccion" required>

            <div id="map"></div>
            <input type="hidden" id="latitud" name="latitud">
            <input type="hidden" id="longitud" name="longitud">

            <button type="submit">Guardar Punto</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
