<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "select * from fluxo_caixa where id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <h1>Alterar fluxo de caixa</h1>
    <form action="altera_fluxo_caixa_exe.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <div>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" value="<?php echo $row['data']?>">
        </div>
        <div>
            <label for="tipo">Tipo:</label>
            <?php 
                if($row['tipo'] == "entrada"){
                    echo "<input type='radio' name='tipo' id='tipo' value='entrada' checked> Entrada";
                    echo "<input type='radio' name='tipo' id='tipo' value='saida'> Saída";
                }else{
                    echo "<input type='radio' name='tipo' id='tipo' value='entrada' > Entrada";
                    echo "<input type='radio' name='tipo' id='tipo' value='saida' checked> Saída";
                }
            ?>
        </div>
        <div>
            <label for="valor">Valor:</label>
            <input type="number" min="0" name="valor" step=".01" id="valor" value="<?php echo $row['valor']?>">
        </div>
        <div>
            <label for="historico">Histórico</label>
            <input type="text" name="historico" id="historico" value="<?php echo $row['historico']?>">
        </div>
        <div>
            <label for="cheque">Cheque:</label>
            <select name='cheque' id='cheque' size='1'>
            <?php 
                if($row['cheque'] == "sim"){
                    echo "<option  selected value='sim'>Sim</option>";
                    echo "<option value='nao'>Nao</option>";
                }else{
                    echo "<option value='sim'>Sim</option>";
                    echo "<option  selected value='nao'>Nao</option>";
                }
            ?>
            </select>
        </div>
        <input type="submit" value="Salvar">
    </form>

    <a href="listar_fluxo_caixa.php">Voltar</a>
</body>
</html>