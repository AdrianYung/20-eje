<!DOCTYPE html>
<html>
<head>
    <title>Ejercico 4 </title>
</head>
<body>

<h2><marquee>Listado de Números Pares e Impares</h2></marquee>
<?php
function esPar($numero) {
    return $numero % 2 == 0;
}
$numerosPares = [];
$numerosImpares = [];
$contador = 1;
while (count($numerosPares) < 20 || count($numerosImpares) < 20) {
    if (esPar($contador)) {
        $numerosPares[] = $contador;
    } else {
        $numerosImpares[] = $contador;
    }
    $contador++;
}
echo "<h3>Números Pares:</h3>";
echo "<ul>";
foreach ($numerosPares as $numero) {
    echo "<li>$numero</li>";
}
echo "</ul>";

echo "<h3>Números Impares:</h3>";
echo "<ul>";
foreach ($numerosImpares as $numero) {
    echo "<li>$numero</li>";
}
echo "</ul>";
?>

</body>
</html>
