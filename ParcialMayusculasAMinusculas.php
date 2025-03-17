<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir a Mayúsculas</title>
</head>
<body>
    <h2>Convertir Texto a Mayúsculas</h2>
    <form method="post">
        <label for="texto">Ingrese un texto:</label><br>
        <input type="text" name="texto" required><br><br>
        <button type="submit">Convertir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST["texto"];  // Captura el texto ingresado
        $textoMayus = strtoupper($texto); // Convierte a mayúsculas

        echo "<h3>Texto en mayúsculas: $textoMayus</h3>";
    }
    ?>
</body>
</html>
