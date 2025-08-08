<?php
// Inclui o arquivo com todas as definições de classe
require 'classes.php';

// Valida se os dados do formulário foram enviados
if (!isset($_POST['classe_xmen']) || empty($_POST['classe_xmen'])) {
    header('Location: index.php');
    exit;
}

$classe_selecionada = $_POST['classe_xmen'];
$codinome_missao = htmlspecialchars($_POST['codinome_missao']);

// Valida se a classe selecionada realmente existe no nosso código
if (!class_exists($classe_selecionada)) {
    die("Erro: Classe de personagem não encontrada.");
}

$personagem = new $classe_selecionada();
$personagem->__set('codinomeMissao', $codinome_missao);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dossiê: <?= $personagem->__get('nome') ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card card-dossier">
            <div class="dossier-header">
                <h2><?= $personagem->__get('nome') ?></h2>
                <h5 class="text-muted">Missão: <?= $personagem->__get('codinomeMissao') ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5 text-center mb-4 mb-md-0">
                        <img src="imagens/<?= $personagem->__get('nomeArquivo') ?>.jpg" class="dossier-img" alt="Foto de <?= $personagem->__get('nome') ?>">
                    </div>
                    <div class="col-md-7">
                        <div class="dossier-section">
                            <h4>Biografia</h4>
                            <p><?= $personagem->__get('biografia') ?></p>
                        </div>
                        <div class="dossier-section">
                            <h4>Poderes e Habilidades</h4>
                            <ul>
                                <?php foreach ($personagem->__get('poderes') as $poder): ?>
                                    <li><?= $poder ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr style="background-color: #306998;">
                
                <div class="dossier-section">
                    <h4 class="text-center">Atributos e Avaliações</h4>
                    <div class="row mt-3 attribute-list">
                        <div class="col-md-6">
                            <p><strong>Força:</strong> <?= $personagem->__get('forca') ?></p>
                            <p><strong>Agilidade:</strong> <?= $personagem->__get('agilidade') ?></p>
                            <p><strong>Resistência:</strong> <?= $personagem->__get('resistencia') ?></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Projeção de Energia:</strong> <?= $personagem->__get('projecaoDeEnergia') ?></p>
                            <p><strong>Inteligência:</strong> <?= $personagem->__get('inteligencia') ?></p>
                        </div>
                    </div>
                </div>

                <div class="dossier-section">
                    <h4 class="text-center">Nível de Poder Geral</h4>
                    <div class="barra-poder mt-3">
                        <div class="progresso-poder" style="--nivel-poder: <?= $personagem->__get('nivelDePoder') ?>%;">
                            <?= $personagem->__get('nivelDePoder') ?>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-outline-info">← Voltar à Seleção</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>