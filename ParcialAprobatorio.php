<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num = rand(1,100);
echo $num;
echo "<br>";
if ($num <= 59) {
echo "Reprobado";
} elseif ($num <=79 ) {
echo "Aprobado" ;
} elseif ($num == 100 ) {
echo "Sobresaliente" ;

}
?>
</body>
</html>