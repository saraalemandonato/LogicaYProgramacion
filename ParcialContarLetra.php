    <button type="submit">Contar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = strtolower($_POST["frase"]); 
        $letra = strtolower($_POST["letra"]); 

        // Validar que el usuario ingrese solo una letra
        if (strlen($letra) != 1) {
            echo "<h3>❌ Debe ingresar solo una letra.</h3>";
        } else {
            $conteo = substr_count($frase, $letra); // Contar la cantidad de veces que aparece la letra
            echo "<h3>✅ La letra '$letra' aparece $conteo veces en la frase.</h3>";
        }
    }
    ?>
</body>
</html>