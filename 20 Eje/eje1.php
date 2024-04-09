<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 </title>
</head>
<body>
    <h1><marquee>Convertidos de Celsius y fahrenheit</h1></marquee>
    <form method="post">
        <label for="temp">Ingrese la temperatura:</label>
        <input type="text" id="temp" name="temp" placeholder="Cualquier numero">
        <select name="unit">
            <option value="celsius">Celsius (°C)</option>
            <option value="fahrenheit">Fahrenheit (°F)</option>
        </select>
        <input type="submit" value="Convertir">
    </form>

    <?php
   
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

  
    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST["temp"];
        $unit = $_POST["unit"];

        if ($unit == "celsius") {
            $convertedTemp = celsiusToFahrenheit($temp);
            echo "<p>$temp Celsius es $convertedTemp Fahrenheit</p>";
        } elseif ($unit == "fahrenheit") {
            $convertedTemp = fahrenheitToCelsius($temp);
            echo "<p>$temp Fahrenheit es $convertedTemp Celsius</p>";
        }
    }
    ?>
</body>
</html>
