<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cérebro - Seleção de Dossiê</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container container-selecao">
        <div class="card card-selecao">
            <div class="card-header text-center text-info">
                ACESSAR DOSSIÊ MUTANTE
            </div>
            <div class="card-body">
                <form action="dossier.php" method="POST">
                    <div class="form-group">
                        <label for="classe_xmen">Selecione o Mutante:</label>
                        <select name="classe_xmen" id="classe_xmen" class="form-control" required >
                            <option value="">-- Escolha um X-Man --</option>
                            <option value="Wolverine">Wolverine</option>
                            <option value="Ciclope">Ciclope</option>
                            <option value="JeanGrey">Jean Grey</option>
                            <option value="Tempestade">Tempestade</option>
                            <option value="ProfessorX">Professor X</option>
                            <option value="Magneto">Magneto</option>
                            <option value="Vampira">Vampira</option>
                            <option value="Gambit">Gambit</option>
                            <option value="Fera">Fera</option>
                            <option value="HomemDeGelo">Homem de Gelo</option>
                            <option value="Anjo">Anjo</option>
                            <option value="Colossus">Colossus</option>
                            <option value="Noturno">Noturno</option>
                            <option value="LinceNegra">Lince Negra</option>
                            <option value="Psylocke">Psylocke</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="codinome_missao">Definir Codinome da Missão:</label>
                        <input type="text" name="codinome_missao" id="codinome_missao" class="form-control" placeholder="Ex: Operação Cérbero" required>
                    </div>
                    <button type="submit" class="btn btn-info btn-block">“Para mim, meus X-Men”</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>