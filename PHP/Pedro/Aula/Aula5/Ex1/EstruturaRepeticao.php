<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repeticao</title>
</head>
<body>

<?php

function GetPrime($num) {
    if ($num < 2) {
        return 0;
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return 0; // Não é primo
        }
    }

    return 1; // É primo
}

$count = 0;

echo "Números primos entre 1 e 100:<br>";

for ($i = 1; $i <= 100; $i++) {
    if (GetPrime($i)) {
        echo $i . " ";
        $count++;
    }
}

echo "<br><br>Total de números primos: " . $count;
?>


    
</body>
</html>