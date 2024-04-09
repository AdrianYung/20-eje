<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>

<marquee><h2>Tablas de Multiplicar</h2></marquee>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Ingrese un número para la tabla de multiplicar 🙄: <input type="number" name="numero" min="1" required><br><br>
    <input type="submit" name="submit" value="Generar tabla">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo "<h3>Tabla de Multiplicar del $numero:</h3>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td> x </td>";
        echo "<td>$i</td>";
        echo "<td> = </td>";
        echo "<td>" . ($numero * $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
