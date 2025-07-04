<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $peso = $_GET["peso"];
    $altura = $_GET["altura"];
    $imc = $peso / ($altura * $altura);

    echo 'Seu Imc é de: ' . round($imc, 2) . '</br>';

    if ($imc < 18.5) {
        echo 'Você está abaixo do peso!';
    } else if ($imc == 18.5 || $imc < 24.9) {
        echo 'Você está com peso normal!';
    } else {
        echo 'Você está acima do peso!';
    }
?>