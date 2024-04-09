<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 6</title>
</head>
<body>
<marquee><h2>Validación de Edad</h2></marquee>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Ingresa tu edad: <input type="number" name="edad" required>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $edad = $_POST["edad"];

        
        if ($edad >= 18) {
            echo "<p>Eres mayor de edad pase a la fiesta</p>";
        } else {
            echo "<p>Eres menor de edad no entras a la fiesta.</p>";
        }
    }
    ?>
</body>
</html>
