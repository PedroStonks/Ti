<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
<?php
    $valorA = $_GET["valorA"];
    $valorB = $_GET["valorB"];
    $valorC = $_GET["valorC"];
    $valorD = $_GET["valorD"];

    $soma = $valorA + $valorC;
    $multiplicacao = $valorB * $valorD;



    echo 'Seu Resultado: ' . round($soma, 2) . '</br>';

    if ($soma > $multiplicacao) {
        echo 'A+C é maior que B+D';
    } else if ($soma < $multiplicacao) {
        echo 'A+C é menor que B+D';
    } else {
        echo 'A+C é igual a B+D';
    }
?>
</body>
</html>