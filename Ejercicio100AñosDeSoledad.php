<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$titulo = "Cien años de soledad";
$autor = "Gabriel García Márquez";
$precio = 19.99;
$disponible = true;
echo "Título del libro: " . $titulo . "<br>";
echo "Autor: " . $autor . "<br>";
echo "Precio: $" . $precio . "<br>";
echo "Disponible: " . ($disponible ? "Sí" : "No");
?>
</body>
</html>