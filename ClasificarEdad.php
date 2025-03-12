<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num = rand(1,100);
echo $num;
echo "<br>";
if ($num <= 10) {
echo "Niños";
} elseif ($num <= 17) {
echo "Adolescentes" ;
} elseif ($num <=30 ) {
echo "Joven" ;
} elseif ($num <= 55 ) {
echo "Adulto" ;
} elseif ($num <= 100) {
echo "Adulto mayor" ;
}
?>
</body>
</html>