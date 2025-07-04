<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Formulario</title>
</head>
<body>

<form action="dados.php" method="GET">
        <label for="nome">Nome:</label>     
        <input name="nome" type="text" placeholder="ex: Pedro"></input>

        <label for="peso">Peso:</label>     
        <input name="peso" type="number" placeholder="ex: 85"></input>

        <label for="altura">Altura:</label> 
        <input name="altura" type="text" placeholder="ex: 1.71"></input>
        <button tipe="submit">Calcular</button>
    </form>

</body>
</html>