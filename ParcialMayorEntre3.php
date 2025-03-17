<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num1 = rand(0,100);
$num2 = rand(0,100);
$num3 = rand(0,100);
echo" Numero 1:$num1";
echo "<br>";
echo "Numero 2:$num2";
echo "<br>";
echo "Numero 3: $num3";
echo "<br>";
if ($num1 >$num2 && $num1>$num3) {
echo "$num1 es el mayor";
} elseif ($num2 >$num1 && $num2>$num3) {
echo "$num2 es el mayor" ;
} elseif ($num3 >$num1 && $num3>$num2) {
echo "$num3 es el mayor" ;

}?>
</body>
</html>