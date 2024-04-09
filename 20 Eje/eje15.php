<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 15</title>
</head>
<body>
    <h2>Verificar si un año es bisiesto</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Ingrese un año: <input type="text" name="year">
        <input type="submit" name="submit" value="Verificar">
    </form>
    
    <?php
    function esBisiesto($year) {
        return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST['year'];
        if (!empty($year) && is_numeric($year) && $year > 0) {
            if (esBisiesto($year)) {
                echo "<p>El año $year si es bisiesto.</p>";
            } else {
                echo "<p>El año $year no es bisiesto.</p>";
            }
        } else {
            echo "<p>ingrese un año válido.</p>";
        }
    }
    ?>
</body>
</html>
