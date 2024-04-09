<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
</head>
<body>
    <h2>Calculadora de IMC (Índice de Masa Corporal)</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Peso (kg): <input type="text" name="peso"><br><br>
        Altura (m): <input type="text" name="altura"><br><br>
        <input type="submit" name="submit" value="Calcular IMC">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['peso']) || empty($_POST['altura'])) {
            echo "complete todos los campos.";
        } else {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $imc = $peso / ($altura * $altura);
            echo "Su Índice de Masa Corporal (IMC) es: " . number_format($imc, 2);
            if ($imc < 18.5) {
                echo "<br>Peso bajo.";
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                echo "<br>Peso normal.";
            } elseif ($imc >= 24.9 && $imc < 29.9) {
                echo "<br>Sobrepeso.";
            } else {
                echo "<br>pos ya sabe mi loco.";
            }
        }
    }
    ?>
</body>
</html>
