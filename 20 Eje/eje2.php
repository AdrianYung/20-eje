<!DOCTYPE html>
<html>
<head>
    <title><marquee>ejercicio 2</title></marquee>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Primer Numero</label>
        <input type="numero" name="num1" required><br><br>
        
        <label for="num2">Segundo Numero</label>
        <input type="numero" name="num2" required><br><br>
        
        <label for="seleccione">Seleccione</label>
        <select name="seleccione">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Divivision</option>
        </select><br><br>
        <marquee >LLame al banquero llamen al joyero llamen a los mios que es dia de pago😎</marquee>
        
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $seleccione = $_POST['seleccione'];
        
     
        switch ($seleccione) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "No se puede dividir por cero";
                }
                break;
            default:
                $resultado = "Operación no válida";
                break;
        }

       
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>