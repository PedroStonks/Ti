<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador Senhas</title>
    

    <?php
    //echo"<pre>";
    //print_r($_POST);
    //echo"</pre>";
 
    $conexao = mysqli_connect('localhost', 'root', '', 'senhas');
 

     if($_POST){
       
        $servico = $_POST["servico"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
 
        mysqli_query($conexao,"INSERT INTO tb_info (SERVICO, LOGIN, SENHA) VALUES ('$servico', '$login', '$senha')");
        unset($_POST);
        header('location: index.php');
     }

     //DELETE
     if($_GET && $_GET ['acao']= 'excluir'){
      mysqli_query($conexao,'DELETE FROM tb_info WHERE ID = '.$_GET['id']);
     }
     //READ
     $resultado = mysqli_query($conexao,'SELECT * FROM tb_info');
    ?>



</head> 
<body>

    <h1 id="titulo">Gerenciador Senhas</h1>
  
    <div>
      <form method="post"  action="index.php">
        <label>Serviço/Site <input type="text" name="servico"required></label>
        <label>Login/e-mail <input type="text" name="login"required></label>
        <label>Senha/Site <input type="text" name="senha" required></label>
        <button type ="submit">  Cadastrar </button>
    </form>
    </div>

<table class ="table">
  <thead>
    <tr class = "table">
      <th>ID</th>
      <th>Serviço/Site</th>
      <th>Login/e-mail</th>
      <th>Senha/Site</th>
    </tr>
  </thead>


  <tbody class = table>
            <?php
            while($dados = mysqli_fetch_assoc($resultado)){
            echo"<tr>";
                echo" <td>".$dados['ID']."</td>";
                echo" <td>".$dados['Servico']."</td>";
                echo" <td>".$dados['Login']."</td>";
                echo" <td>".$dados['Senha']."</td>";
                echo" <td>
                    <button class='btn-edit'>Editar</button>
                    <button class='btn-excluir'><a href='index.php?acao=Excluir&id=" . $dados['ID'] . "'> Excluir </a></button>
                 <button class='btn-edit'>Atualizar<a href='atualizacao.php?id=".$dados['ID']."
                    &servico=".$dados['SERVICO']."
                    &login=".$dados['LOGIN']."
                    &senha=".$dados['SENHA']."
                    '> Atualizar</a></button>

                   <button class='btn-delete'> <a href = 'atualizacao.php?
                    acao=excluir&id=".$dados['ID']."'>Excluir</a> </button>
                </td>";
            echo "</tr>";
            }
            ?>
  </tbody>




</table>


</body>
</html>