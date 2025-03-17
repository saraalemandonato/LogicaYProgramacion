<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$nacimiento = new DateTime ("09-02-2008");
$actualidad=  new DateTime ("16-03-2025") ;
$edad = $nacimiento->diff($actualidad)->y;

 echo "Fecha de nacimiento: " . $nacimiento->format("d/m/Y")."<br>";
echo "la edad de la persona es $edad años";

?>
</body>
</html>