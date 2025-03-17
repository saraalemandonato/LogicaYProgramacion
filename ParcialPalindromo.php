
<html>
<head>
    <title>problem</title>
</head>
<body>
<?php
function esPalindromo($palabra) {
    $reversa = strrev($palabra);
    return strtolower($palabra) == strtolower($reversa);
}
$palabra = "reconocer";
echo esPalindromo($palabra) ? "Es un palíndromo" : "No es un palíndromo";
?>
</body>
</html>