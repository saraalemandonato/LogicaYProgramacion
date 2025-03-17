<html>
<head>
<title>problema</title>
</head>
<body>
?php
session_start(); 

if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 1000;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = $_POST['accion'];
    $monto = isset($_POST['monto']) ? floatval($_POST['monto']) : 0;

    if ($accion == "depositar") {
        if ($monto > 0) {
            $_SESSION['saldo'] += $monto;
            $mensaje = "Depósito exitoso. Nuevo saldo: $" . $_SESSION['saldo'];
        } else {
            $mensaje = "El monto debe ser mayor a 0.";
        }
    } elseif ($accion == "retirar") {
        if ($monto > 0 && $monto <= $_SESSION['saldo']) {
            $_SESSION['saldo'] -= $monto;
            $mensaje = "Retiro exitoso. Nuevo saldo: $" . $_SESSION['saldo'];
        } else {
            $mensaje = $monto > $_SESSION['saldo'] ? "Saldo insuficiente." : "El monto debe ser mayor a 0.";
        }
    } elseif ($accion == "consultar") {
        $mensaje = "Su saldo actual es: $" . $_SESSION['saldo'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajero Automático</title>
</head>
<body>
    <h2>Cajero Automático</h2>
    <form method="post">
        <label for="monto">Ingrese monto:</label>
        <input type="number" name="monto" step="0.01">
        
        <button type="submit" name="accion" value="depositar">Depositar</button>
        <button type="submit" name="accion" value="retirar">Retirar</button>
        <button type="submit" name="accion" value="consultar">Consultar Saldo</button>
    </form>

    <?php if (isset($mensaje)) { echo "<p><strong>$mensaje</strong></p>"; } ?>

</body>
</html>