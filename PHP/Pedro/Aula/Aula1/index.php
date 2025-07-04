<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula1</title>
</head>
<body>
<?php
    //$a = 'Meu primeiro arquivo com pqp';
    //echo $a;
    
    //Concatenação
    //$fichacompleta = $nome."-" .$idade. " - " .$salario;
    //echo $fichacompleta;

    $nome='Tati';
    $idade='20';
    $salario='1200';

    //echo"<br>";

    //$fichacompleta="$nome -";
    //$fichacompleta .="$idade -";
    //$fichacompleta .="$salario - ";
    //echo $fichacompleta;


    //echo "meu nome: {$nome} - minha idade: {$idade} - meu salario: {$salario}";

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];

    echo $n1 + $n2;

    ?>

</body>
</html>