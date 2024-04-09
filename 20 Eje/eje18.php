<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <h2>Validación de Correo Electrónico</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="email">Correo Electrónico:</label><br>
        <input type="text" id="email" name="email"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    function validarCorreo($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>El correo electrónico $email es válido🥱.</p>";
        } else {
            echo "<p>El correo electrónico $email no es válido😩.</p>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST['email'];
        validarCorreo($correo);
    }
    ?>

</body>
</html>
