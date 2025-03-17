<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simple</title>
</head>
<body>
    <h2>Calculadora Simple en PHP</h2>
    <form method="post">
        <label>Número 1:</label>
        <input type="number" name="num1" step="any" required>
        <br><br>
        
        <label>Número 2:</label>
        <input type="number" name="num2" step="any" required>
        <br><br>
        
        <label>Operación:</label>
        <select name="operacion">
            <option value="sumar">Suma (+)</option>
            <option value="restar">Resta (-)</option>
            <option value="multiplicar">Multiplicación (*)</option>
            <option value="dividir">División (/)</option>
        </select>
        <br><br>
        
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST["calcular"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        $resultado = 0;

        switch ($operacion) {
            case "sumar":
                $resultado = $num1 + $num2;
                break;
            case "restar":
                $resultado = $num1 - $num2;
                break;
            case "multiplicar":
                $resultado = $num1 * $num2;
                break;
            case "dividir":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    echo "<p style='color:red;'>Error: No se puede dividir entre 0.</p>";
                    exit;
                }
                break;
            default:
                echo "<p style='color:red;'>Operación no válida.</p>";
                exit;
        }

        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>
