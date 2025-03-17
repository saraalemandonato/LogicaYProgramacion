<html>
<head>
    <title>Día de la Semana</title>
</head>
<body>

    <form method="post">
        <label>Ingrese una fecha (YYYY-MM-DD):</label>
        <input type="date" name="fecha">
        <input type="submit" value="Ver día">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fecha = $_POST["fecha"];

        function dia_de_la_semana($fecha) {
        
            $dias_semana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
            

            $numero_dia = date("w", strtotime($fecha));

            return $dias_semana[$numero_dia];
        }

        echo "<p>El día de la semana es: <strong>" . dia_de_la_semana($fecha) . "</strong></p>";
    }
    ?>

</body>
</html>