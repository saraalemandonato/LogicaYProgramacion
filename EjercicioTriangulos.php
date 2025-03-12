<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num = rand(1,10);
echo $num;
echo "<br>";
if ($num ==1) {
echo "Equilatero";
} elseif ($num == 5) {
echo "Isósceles" ;
} elseif ($num == 7 ) {
echo "Escaleno" ;
}
?>
</body>
</html>