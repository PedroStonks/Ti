<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repeticao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<form action="Ex5.php" method="post">
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <fieldset>
            <legend>Entrevistado <?= $i ?></legend>

            Sexo:
            <select name="sexo[]">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>

            Resposta:
            <select name="resposta[]">
                <option value="S">Sim</option>
                <option value="N">Não</option>
            </select>
        </fieldset>
        <br>
    <?php endfor; ?>

    <button type="submit">Enviar</button>
</form>


    
</body>
</html>