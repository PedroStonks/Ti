<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstruturaRepeticao</title>
</head>
<body>


<?php

$pares = array();

for ($i = 1000; $i <= 2000; $i++) {
    if ($i % 2 == 0) {
        $pares[] = $i;
    }
}

echo "Números pares entre 1000 e 2000:<br>";
echo implode(", ", $pares);

echo "<br><br>Total de números pares: " . count($pares);
?>

</body>
</html>