<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

<?php
$numeros = array();

while (count($numeros) < 6) {
    $numero = rand(1, 60);
    if (!in_array($numero, $numeros)) {
        $numeros[] = $numero;
    }
}

sort($numeros);

echo "Números sorteados em ordem crescente: ";
foreach ($numeros as $num) {
    echo $num . " ";
}
?>

    
</body>
</html>