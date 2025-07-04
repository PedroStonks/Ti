<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repeticao</title>
</head>
<body>
<?php
if (isset($_GET['numero'])) {
    $numero = floatval($_GET['numero']);

    if ($numero > 0 && $numero <= 10) {
        $resultado = "<h3>Tabuada do número " . round($numero, 2) . "</h3>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado .= "$numero x $i = " . ($numero * $i) . "<br>";
        }

        // Exibir a tabuada completa com um único echo
        echo $resultado;

    } else {
        echo "Digite um número entre 1 e 10.";
    }
}
?>


</body>
</html>