<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <h2>Palabras Prohibidas en un Texto</h2>
    <form method="post">
        <label for="texto">Ingrese una palabra o texto</label><br>
        <textarea id="texto" name="texto" rows="4" cols="50"></textarea><br><br>
        <label for="prohibidas">Palabras prohibidas colocarles comas:</label><br>
        <input type="text" id="prohibidas" name="prohibidas"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST["texto"];
        $prohibidas = explode(",", $_POST["prohibidas"]);
        foreach ($prohibidas as $palabra) {
            $texto = str_ireplace(trim($palabra), "***", $texto);
        }
        echo "<h3>Texto Modificado:</h3>";
        echo "<p>$texto</p>";
    }
    ?>
</body>
</html>
