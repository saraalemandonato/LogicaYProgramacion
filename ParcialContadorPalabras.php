<!DOCTYPE html>
<html>
<head>
    <title>problem</title>
</head>
<body>
    <h2>Contador de Palabras</h2>
    <form method="post">
        <label>Escribe una oración:</label><br>
        <textarea name="oracion" rows="4" cols="50"></textarea><br>
        <input type="submit" name="contar" value="Contar Palabras">
    </form>

    <?php
    if (isset($_POST['contar'])) {
        $oracion = trim($_POST['oracion']); // Eliminamos espacios extra
        if (!empty($oracion)) {
            $palabras = str_word_count($oracion); // Contamos las palabras
            echo "<h3>La oración ingresada tiene <strong>$palabras</strong> palabras.</h3>";
        } else {
            echo "<h3>Por favor, ingresa una oración.</h3>";
        }
    }
    ?>
</body>
</html>