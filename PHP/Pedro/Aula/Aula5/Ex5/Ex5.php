<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repeticao</title>
</head>
<body>

<?php
// Simulação dos dados de 10 entrevistados
$entrevistados = [
    ['sexo' => 'M', 'resposta' => 'S'],
    ['sexo' => 'F', 'resposta' => 'N'],
    ['sexo' => 'F', 'resposta' => 'S'],
    ['sexo' => 'M', 'resposta' => 'N'],
    ['sexo' => 'F', 'resposta' => 'N'],
    ['sexo' => 'M', 'resposta' => 'S'],
    ['sexo' => 'F', 'resposta' => 'S'],
    ['sexo' => 'M', 'resposta' => 'N'],
    ['sexo' => 'M', 'resposta' => 'N'],
    ['sexo' => 'F', 'resposta' => 'N']
];

// Contadores
$total_sim = 0;
$total_nao = 0;

$total_homens = 0;
$homens_nao = 0;

$total_mulheres = 0;
$mulheres_nao = 0;

// Processa cada entrevistado
foreach ($entrevistados as $pessoa) {
    $sexo = strtoupper($pessoa['sexo']);
    $resposta = strtoupper($pessoa['resposta']);

    // Contagem geral
    if ($resposta == 'S') {
        $total_sim++;
    } elseif ($resposta == 'N') {
        $total_nao++;
    }

    // Contagem por sexo
    if ($sexo == 'M') {
        $total_homens++;
        if ($resposta == 'N') {
            $homens_nao++;
        }
    } elseif ($sexo == 'F') {
        $total_mulheres++;
        if ($resposta == 'N') {
            $mulheres_nao++;
        }
    }
}

// Cálculos de porcentagem
$porcentagem_homens_nao = $total_homens > 0 ? ($homens_nao / $total_homens) * 100 : 0;
$porcentagem_mulheres_nao = $total_mulheres > 0 ? ($mulheres_nao / $total_mulheres) * 100 : 0;

// Resultados
echo "Total que respondeu SIM: $total_sim<br>";
echo "Total que respondeu NÃO: $total_nao<br>";
echo "Porcentagem de homens que responderam NÃO: " . round($porcentagem_homens_nao, 2) . "%<br>";
echo "Porcentagem de mulheres que responderam NÃO: " . round($porcentagem_mulheres_nao, 2) . "%<br>";
?>

    
</body>
</html>