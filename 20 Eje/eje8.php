<!DOCTYPE html>
<html>
<head>
    <title>ejercio 8</title>
</head>
<body>
    <marquee><h2>Calculadora de Área y Perímetro de Figuras</h2></marquee>
    <form method="post">
        <label for="figura">Selecciona la figura:</label>
        <select name="figura" id="figura">
            <option value="circulo">Círculo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
        </select><br><br>
        <label for="dimension1">Ingresa la dimensión 1:</label>
        <input type="number" name="dimension1" id="dimension1"><br><br>
        <label for="dimension2">Ingresa la dimensión 2 (solo para rectángulo):</label>
        <input type="number" name="dimension2" id="dimension2" disabled><br><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $figura = $_POST["figura"];
        $dimension1 = $_POST["dimension1"];

        if ($figura == "rectangulo") {
            $dimension2 = $_POST["dimension2"];
        }
        switch ($figura) {
            case 'circulo':
                $area = pi() * pow($dimension1, 2);
                $perimetro = 2 * pi() * $dimension1;
                echo "<h3>Resultados para el círculo:</h3>";
                break;
            case 'cuadrado':
                $area = pow($dimension1, 2);
                $perimetro = 4 * $dimension1;
                echo "<h3>Resultados para el cuadrado:</h3>";
                break;
            case 'rectangulo':
                $area = $dimension1 * $dimension2;
                $perimetro = 2 * ($dimension1 + $dimension2);
                echo "<h3>Resultados para el rectángulo:</h3>";
                break;
            default:
                echo "Figura no válida";
                break;
        }

        echo "<p>Área: $area</p>";
        echo "<p>Perímetro: $perimetro</p>";
    }
    ?>
    <script>
        document.getElementById('figura').addEventListener('change', function() {
            var figura = this.value;
            if (figura === 'rectangulo') {
                document.getElementById('dimension2').disabled = false;
            } else {
                document.getElementById('dimension2').disabled = true;
            }
        });
    </script>
</body>
</html>
