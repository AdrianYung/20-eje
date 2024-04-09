<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 20</title>
</head>
<body>
    <h2>Sorteo</h2>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit" name="participar">Participar</button>
    </form>
    <?php
    if(isset($_POST['participar'])) {
        $nombre = $_POST['nombre'];
        $ganador = rand(0, 1);
        if($ganador == 1) {
            echo "<p>Felicidades, $nombre, ganaste pero una camorra </p>";
        } else {
            echo "<p>Lo siento, $nombre, no ganaste😂</p>";
        }
    }
    ?>
</body>
</html>
