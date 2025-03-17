<html>
<head>
    <title>Problema</title>
</head>
<body>

    <form method="post">
        <label>Ingrese un correo electrónico:</label>
        <input type="text" name="email">
        <input type="submit" value="Validar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];

        // Función para validar correo electrónico en PHP
        function es_email_valido($email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
        }

        // Verificar si el correo es válido
        if (es_email_valido($email)) {
            echo "<p>El correo es válido.</p>";
        } else {
            echo "<p>El correo no es válido.</p>";
        }
    }
    ?>

</body>
</html>