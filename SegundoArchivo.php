<html>
<head></head>
<body>
 <?php
 $dia = date("d");
 if ($dia <= 25) {
 echo "sitio activo";
 } else {
 echo "sitio fuera de servicio";
 }
 ?>
</body>
</html>