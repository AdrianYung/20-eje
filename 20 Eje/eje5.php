<!DOCTYPE html>
<html>
<head>
    <title>Ejercico 5</title>
</head>
<body>
    <h2><marquee>Manipulación de Cadenas</h2></marquee>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="cadena">Ingresa una cadena de texto:</label><br>
        <input type="text" id="cadena" name="cadena"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST["cadena"];
        echo "<p>La cadena en mayúsculas es: " . strtoupper($cadena) . "</p>";
        echo "<p>La cadena en minúsculas es: " . strtolower($cadena) . "</p>";
        $cantidad_caracteres = strlen($cadena);
        echo "<p>La cantidad de caracteres en la cadena es: $cantidad_caracteres</p>";
    }
    ?>

</body>
</html>
