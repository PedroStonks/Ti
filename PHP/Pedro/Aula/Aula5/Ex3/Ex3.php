<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstruturaRepeticao</title>
</head>
<body>

<?php
if (isset($_GET['numeros'])) {
    $entrada = $_GET['numeros'];

    // Separar os valores usando vírgula
    $valores = explode(',', $entrada);

    // Limpar espaços e converter para float
    $numeros = [];
    foreach ($valores as $v) {
        $numero = floatval(trim($v));
        if ($numero != 0) {
            $numeros[] = $numero;
        } else {
            // Se for zero, parar a leitura
            break;
        }
    }

    if (count($numeros) > 0) {
        $maior = $numeros[0];
        $menor = $numeros[0];

        foreach ($numeros as $num) {
            if ($num > $maior) {
                $maior = $num;
            }
            if ($num < $menor) {
                $menor = $num;
            }
        }

        echo "Menor número digitado: $menor<br>";
        echo "Maior número digitado: $maior<br>";
    } else {
        echo "Nenhum número válido foi digitado antes do zero.";
    }
} else {
    echo "Por favor, insira os números no formulário.";
}
?>

    
</body>
</html>