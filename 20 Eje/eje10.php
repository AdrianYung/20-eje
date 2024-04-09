<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 10</title>
</head>
<body>
    <h2>Inversión de una Cadena</h2>
    <form method="post">
        <label for="cadena">Introduce un texto</label><br>
        <input type="text" id="cadena" name="cadena"><br><br>
        <input type="submit" value="Invertir">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST["cadena"];
        $cadena_invertida = strrev($cadena);
        echo "<p>Cadena invertida: $cadena_invertida</p>";
    }
    ?>
</body>
</html>
