<html>
<head>
<title>problema</title>
</head>
<body>
<?php
$num= rand(1,100);

if ($num>=18){
echo "Mayor de edad";
} elseif ($num<=18) {
echo "Menor de edad";
}
echo $num
?>
</body>
</html>