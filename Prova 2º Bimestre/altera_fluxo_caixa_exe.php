<?php

    include('conexao.php');
    
    $id = $_POST['id'];
    $data= $_POST['Data'];
    $tipo = $_POST['Tipo'];
    $valor = $_POST['Valor'];
    $historico = $_POST['Histórico'];
    $cheque = $_POST['Cheque'];
    
    
    echo "<h1>Alteração de dados</h1>";

    $sql = "update fluxo_caixa set  data = '$data', tipo = '$tipo', valor = '$valor', historico = '$historico', cheque = '$cheque' where id = '$id'";
    echo $sql ."<br>";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Dados alterados com sucesso! <br>";
    }else{
        echo "Erro na alteração de dados:  ".mysqli_error($con)."!";
    }
?>
<a href="index.php">Voltar</a>