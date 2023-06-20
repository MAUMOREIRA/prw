<?php
    include("conexao.php");
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    
    
    $sql = "insert into fluxo_caixa(data, tipo, valor, historico, cheque)";
    $sql .= "values ('".$data."', '".$tipo."','".$valor."','".$historico."', '".$cheque."');";
    echo $sql. "<br>";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados cadastrados com sucesso!";
    else 
        echo "Erro ao tentar cadastrar!";

    echo " <br><a href='index.php'>Voltar</a>"
?>