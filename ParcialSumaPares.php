<?php
function sumarPares($numeros) {
    $suma = 0;
    foreach ($numeros as $num) {
        if ($num % 2 == 0) { 
            $suma += $num;  
        }
    }
    return $suma;
}


$listaNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


$resultado = sumarPares($listaNumeros);
echo "La suma de los números pares es: $resultado";
?>