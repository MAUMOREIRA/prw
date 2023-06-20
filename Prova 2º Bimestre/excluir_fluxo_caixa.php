<?php
    include('conexao.php');
    $id = $_GET['id'];
    

    echo "<h1>Deletar dados</h1>";

    $sql = "delete from fluxo_caixa where id = '$id'";
    $result = mysqli_query($con, $sql);
    echo $sql ."<br>";
    if($result){
        echo "Dados deletados com sucesso! <br>";
    }else{
        echo "Erro ao deletar dados:  ".mysqli_error($con)."!";
    }
?>
<a href="index.php">Voltar</a>