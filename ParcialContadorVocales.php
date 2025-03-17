<html>
<head>
<title>problema</title>
</head>
<body>
<?php
    $palabra= "palabra";
    $vocales =  ['a', 'e', 'i', 'o', 'u'];
        $contador = 0;
      for ($i = 0; $i < strlen($palabra); $i++) {
        if (in_array($palabra[$i], $vocales)) {
            $contador++;
}
}
    echo "La palabra $palabra tiene $contador vocales";

?>
</body>
</html>