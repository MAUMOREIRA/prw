<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            include('conexao.php');
            $sql = "SELECT * FROM fluxo_caixa";
            // mysqli_query => executa um comando no anco de dados
            $result = mysqli_query($con,$sql);
            // mysqli_fetch_array => retorna apenas uma linha do registros retornados 
            $row = mysqli_fetch_array($result);
        ?>
        <h1>Consulta de usuários</h1>
        <table align="center" border="1" width="500" bordercolor="purple" bgcolor="#FFC0CB">

            <tr>
                <th>Código</th>
                <th>Data</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Histórico</th>
                <th>Cheque</th>
                <th>Excluir</th>
            </tr>
            <?php
                do{
                    if($row)
                    {
                        echo "<tr>";
                        echo "<td>".$row['id_usuario']."</td>";
                        if($row['foto'] == "")
                            echo "<td></td>";
                        else
                            echo "<td><img src='".$row['foto']."'width='80' height='100'/></td>";
                        echo "<td>".$row['nome_usuario']."</td>";
                        echo "<td>".$row['email_usuario']."</td>";
                        echo "<td>".$row['fone_usuario']."</td>";
                        echo "<td><a href='altera_fluxo_caixa.php?id_usuario=".$row['id_usuario']."'>Alterar</a></td>";
                        echo "<td><a href='excluir_fluxo_caixa.php?id_usuario=".$row['id_usuario']."'>Deletar</a></td>";
                        echo "</tr>";
                    }
                }while($row = mysqli_fetch_array($result))
            ?>
            <a href = "index.php">Voltar</a>
        </table>

</body>
</html>