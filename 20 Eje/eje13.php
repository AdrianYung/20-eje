<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flor en movimiento con texto</title>
<style>
    body {
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    .container {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }
    .flower {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: animateFlower 5s infinite;
    }
    @keyframes animateFlower {
        0% { transform: translate(-50%, -50%) rotate(0deg); }
        100% { transform: translate(-50%, -50%) rotate(360deg); }
    }

    .text {
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translateX(-50%);
        font-size: 24px;
        color: #333;
    }
</style>
</head>
<body>
<div class="container">
    <img src="https://media.istockphoto.com/id/1473703264/vector/meme-flork-man-holding-a-flower-on-a-pale-green-background.jpg?s=612x612&w=0&k=20&c=5doUyBFriLy4wepTX4biMgZpFCHgqdVGb0PmTiCYgtE=" alt="Flor" class="flower">
    <?php
        $texto = "No pude hacer este ejercicio";
        echo "<div class='text'>$texto</div>";
    ?>
</div>
</body>
</html>
