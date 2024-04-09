<!DOCTYPE html>
<html>
<head>
    <title>Ejercio 3</title>
</head>
<body>

<h2><marquee>Numero Mayor</h2></marquee>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Primer número: <input type="number" name="num1"><br>
    Segundo número: <input type="number" name="num2"><br>
    Tercer número: <input type="number" name="num3"><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

  
    $mayor = $num1;
    if ($num2 > $mayor) {
        $mayor = $num2;
    }
    if ($num3 > $mayor) {
        $mayor = $num3;
    }
    echo "<p>El mayor de los tres números es: $mayor</p>";
}
?>
</body>
</html>
