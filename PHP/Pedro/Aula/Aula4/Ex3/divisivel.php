<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $numero = $_GET["numero"];





    echo 'Seu Resultado: ' . round($numero, 2) . '</br>';

    if ($numero % 10 == 0) {
    echo "$numero é divisível por 10\n";
} elseif ($numero % 5 == 0) {
    echo "$numero é divisível por 5\n";
} elseif ($numero % 2 == 0) {
    echo "$numero é divisível por 2\n";
} else {
    echo "$numero não é divisível por 10, 5 ou 2\n";
}
?>
    
</body>
</html>