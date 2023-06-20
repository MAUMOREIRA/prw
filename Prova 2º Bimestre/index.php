<?php 
    include('cria_sessao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PÁGINA INICIAL - PROJETO CAIXA</h1>
    <?php 
        if(!empty($_SESSION['login'])){ // caso a sessão esteja diferente de vazia
            // executa isso.
            echo "<h3>Ola ".$_SESSION['login']['nome_usuario']."</h3>"; // pega o nome do login
            echo "<a href='logout.php'>Sair</a>";
        }
    ?>
    <hr>
    <ul>
       <li><a href="cadastro_fluxo_caixa.html">Cadastrar</a></li>
       <li><a href="listar_fluxo_caixa.php">Listar</a></li>
       <li><a href="consulta_fluxo_caixa.php">Consultar</a></li>
       <?php 
       
       ?>
    </ul>
</body>
</html>