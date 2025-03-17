
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
session_start(); 
if (!isset($_SESSION['pares'])) {
    $_SESSION['pares'] = 0;
}
if (!isset($_SESSION['impares'])) {
    $_SESSION['impares'] = 0;
}
$num = rand(0,100);
echo $num;
echo "<br>";
if ($num % 2 == 0) {
echo "El número $num es PAR.";
    } else {
echo "El número $num es IMPAR.";
    }
echo "Total de números pares generados: " . $_SESSION['pares'] . "<br>";
echo "Total de números impares generados: " . $_SESSION['impares'] . "<br>";
?>
</body>
</html>