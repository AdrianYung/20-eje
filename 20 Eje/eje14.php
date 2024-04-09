<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 14</title>
</head>
<body>
    <h2>Contador de Caracteres en un Texto</h2>
    <form method="post">
        <label for="texto">Ingresa un texto:</label><br>
        <textarea name="texto" id="texto" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Contar Caracteres">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["texto"])) {
            $texto = $_POST["texto"];
            $caracteres = strlen(str_replace(' ', '', $texto));
            echo "El texto tiene $caracteres caracteres (sin contar los espacios en blanco).";
        } else {
            echo "ingresa algún texto.";
        }
    }
    ?>
</body>
</html>
