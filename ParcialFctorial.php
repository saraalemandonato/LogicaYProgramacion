<html>
<head>
    <title>Factorial</title>
</head>
<body>
    <?php
    function factorial($n) {
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i; 
        }
        return $factorial; 
    }
    for ($num = 1; $num <= 10; $num++) {
        echo "Factorial de $num es: " . factorial($num) . "<br>";
    }
    ?>
</body>
</html>