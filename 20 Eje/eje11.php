<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 11</title>
</head>
<body>
    <h2>Conversor de Moneda</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Cantidad:
        <input type="number" step="any" name="cantidad" required>
        <br><br>
        De:
        <select name="moneda_origen" required>
            <option value="USD">Dólares (USD)</option>
            <option value="Q">Quetzales (Q)</option>
        </select>
        <br><br>
        A:
        <select name="moneda_destino" required>
            <option value="Q">Quetzales (Q)</option>
            <option value="USD">Dólares (USD)</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST["cantidad"];
        $moneda_origen = $_POST["moneda_origen"];
        $moneda_destino = $_POST["moneda_destino"];

       
        $tasa_cambio = 7.77; // 1 dolar = 7.77 quetzales
        $tasa_cambio = 7.77; // 1 dolar = 7.77 quetzales
       
        $cantidad_convertida = $cantidad * $tasa_cambio;
        $cantidad_convertida = $tasa_cambio * $cantidad;

        echo "<h3>Resultado:</h3>";
        echo "$cantidad $moneda_origen son $cantidad_convertida $moneda_destino";
    }
    ?>
</body>
</html>
