
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num = rand(-100,100);
echo $num;
echo "<br>";
if ($num >=-1) {
echo "Positivo";
} elseif ($num == 0) {
echo "cero" ;
} elseif ($num <=1) {
echo "Negativo" ;
}?>
</body>
</html>