<!DOCTYPE html>
<html>
<head>
    <title>ejercicio 9</title>
</head>
<body>
<h2>Contador de Palabras</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="texto">Introduce tu texto:</label><br>
    <textarea id="texto" name="texto" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Contar palabras">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $texto = $_POST['texto'];

   
    $texto = trim($texto);

   
    $numero_palabras = str_word_count($texto);

  
    echo "<p>El número de palabras es: $numero_palabras</p>";
}
?>

</body>
</html>
