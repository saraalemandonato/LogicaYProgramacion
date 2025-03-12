<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num = rand(0,26);
echo $num;
echo "<br>";
if ($num <= 5) {
echo "¡Buenos dias!";
} elseif ($num <= 12) {
echo "¡Buenas tardes!" ;
} elseif ($num <=19 ) {
echo "¡Buenas noches!" ;
} elseif ($num == 4 ) {
echo "¡Buenas noches!" ;

}
?>
</body>
</html>