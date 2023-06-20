<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <style>
        .back{
            display: flex;
            justify-content: center;

        }
    </style>
</head>
<body>
    <?php
        include('conexao.php');
        $sql = "SELECT * FROM fluxo_caixa";
        
        $result = mysqli_query($con, $sql);
        
        $row = mysqli_fetch_array($result);
    ?>
    <h1>Consulta de fluxo de caixa</h1>
    <table align="center" border="1" width="700">
        <thead>
            <tr>
                <th>Código</th>
                <th>Data</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Histórico</th>
                <th>Chuque</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            
        </thead>
        <?php
            do{
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['data']."</td>";
                echo "<td>".$row['tipo']."</td>";
                echo "<td>".$row['valor']."</td>";
                echo "<td>".$row['historico']."</td>";
                echo "<td>".$row['cheque']."</td>";
                echo "<td> <a href='altera_fluxo_caixa.php?id=".$row["id"]."'>Alterar</a> </td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id=".$row["id"]."'>Deletar</a></td>";
                echo"</tr>";
            }while($row = mysqli_fetch_array($result))
        ?>
        <tfooter>
           <tr>
            <td colspan="8">
                <a href="index.php" class="back">Voltar</a>
            </td>
            
           </tr> 
        </tfooter>
    </table>
</body>
</html>