<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 18</title>
</head>
<body>
    <h2>Calculadora de Edad</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required>
        <input type="submit" name="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $fecha_actual = new DateTime();
        $fecha_nac = new DateTime($fecha_nacimiento);
        $edad = $fecha_actual->diff($fecha_nac);
        echo "<h3>Edad:</h3>";
        echo "<p>Años: " . $edad->y . "</p>";
        echo "<p>Meses: " . $edad->m . "</p>";
        echo "<p>Días: " . $edad->d . "</p>";
    }
    ?>

</body>
</html>
