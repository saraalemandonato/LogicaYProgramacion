<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num = rand(1,20);
echo $num;
echo "<br>";
if ($num % 2 == 0) {
echo "El número $num es PAR.";
    } else {
echo "El número $num es IMPAR.";
    }

?>
</body>
</html>