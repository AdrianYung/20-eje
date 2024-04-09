<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 16</title>
</head>
<body>
    <h2>Conversor de Temperaturas</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="temp">Temperatura:</label>
        <input type="text" id="temp" name="temp" required>
        <select name="from" required>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>
        <span>a</span>
        <select name="to" required>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>
        <input type="submit" value="Convertir">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST["temp"];
        $from = $_POST["from"];
        $to = $_POST["to"];
        $result = convertTemperature($temp, $from, $to);
        echo "<p>Resultado: $result $to</p>";
    }
    function convertTemperature($temp, $from, $to) {
        switch ($from) {
            case 'celsius':
                switch ($to) {
                    case 'fahrenheit':
                        return ($temp * 9/5) + 32;
                        break;
                    case 'kelvin':
                        return $temp + 273.15;
                        break;
                    default:
                        return $temp;
                        break;
                }
                break;
            case 'fahrenheit':
                switch ($to) {
                    case 'celsius':
                        return ($temp - 32) * 5/9;
                        break;
                    case 'kelvin':
                        return ($temp - 32) * 5/9 + 273.15;
                        break;
                    default:
                        return $temp;
                        break;
                }
                break;
            case 'kelvin':
                switch ($to) {
                    case 'celsius':
                        return $temp - 273.15;
                        break;
                    case 'fahrenheit':
                        return ($temp - 273.15) * 9/5 + 32;
                        break;
                    default:
                        return $temp;
                        break;
                }
                break;
            default:
                return $temp;
                break;
        }
    }
    ?>
</body>
</html>
