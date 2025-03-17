<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$año = rand(1900,2025);
echo" Año:$año <br>";

if ($año%400 ==0 || ($año%4 == 0 && $año%100!=0)) {
echo "El año $año es biciesto";
} else {
echo "El año $año no es biciesto" ;
}?>
</body>
</html>