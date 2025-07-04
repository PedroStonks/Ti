<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $valor1 = $_GET["valorA"];
    $valor2 = $_GET["valorB"];

    $soma = $valor1 + $valor2;
    $soma2 = ($valor1 + $valor2) + 8;

    $subtracao = ($valor1 + $valor2) - 5;



    echo 'Seu Resultado: ' . round($soma, 2) . '</br>';

    if ($soma > 20) {
        echo "Foi Maior que  {$soma2}";
    } else if ($soma < 20) {
        echo "Foi Menor {$subtracao}";
    } else {
        echo "Foi Igual  {$subtracao}";
    }
?>
</body>
</html>