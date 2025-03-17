<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Nombre</title>
</head>
<body>
    <h2>Buscar un Nombre en la Lista</h2>
    <form method="post">
        <label for="nombre">Ingrese un nombre:</label>
        <input type="text" name="nombre" required>
        <button type="submit">Buscar</button>
    </form>

    <?php
    $nombres = ["Ana", "Carlos", "Elena", "Javier", "María", "Pedro", "Sofía", "Luis"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreBuscado = trim($_POST["nombre"]); // Limpiar espacios
        $nombreBuscado = ucfirst(strtolower($nombreBuscado)); // Capitalizar primera letra

        // Verificar si el nombre está en la lista
        if (in_array($nombreBuscado, $nombres)) {
            echo "<h3>✅ El nombre '$nombreBuscado' está en la lista.</h3>";
        } else {
            echo "<h3>❌ El nombre '$nombreBuscado' NO se encontró en la lista.</h3>";
        }
    }
    ?>
</body>
</html>
