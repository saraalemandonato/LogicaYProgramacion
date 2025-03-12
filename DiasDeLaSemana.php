
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num = rand(1,7);
echo $num;
echo "<br>";
if ($num ==1) {
echo "Lunes";
} elseif ($num == 2) {
echo "Martes" ;
} elseif ($num == 3 ) {
echo "Miercoles" ;
} elseif ($num == 4 ) {
echo "Jueves" ;
} elseif ($num == 5) {
echo "Viernes" ;
} elseif ($num == 6) {
echo "Sabado" ;
} elseif ($num == 7) {
echo "Domingo" ;

}
?>
</body>
</html>