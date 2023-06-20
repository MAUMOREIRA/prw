<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'prova2';

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}


$id_registro = $_GET['id'];


$sql = "SELECT Data, Tipo, Valor, Histórico, Cheque FROM tabela WHERE id = $id_registro";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    
    $data = $row['Data'];
    $tipo = $row['Tipo'];
    $valor = $row['Valor'];
    $historico = $row['Histórico'];
    $cheque = $row['Cheque'];
} else {
    echo "Registro não encontrado.";
    exit();
}


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Alteração</title>
</head>
<body>
    <h1>Formulário de Alteração</h1>
    <form action="altera_fluxo_caixa_exe.php" method="POST">
        <label for="data">Data:</label>
        <input type="text" id="data" name="data" value="<?php echo $data; ?>" required><br><br>
        
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" value="<?php echo $tipo; ?>" required><br><br>
        
        <label for="Valor">Valor:</label>
        <input type="text" id="Valor" name="Valor" value="<?php echo $valor; ?>" required><br><br>

        <label for="Histórico">Histórico:</label>
        <input type="text" id="Histórico" name="Histórico" value="<?php echo $historico; ?>" required><br><br>
        
        <label for="cheque">Cheque:</label>
        <input type="text" id="cheque" name="cheque" value="<?php echo $cheque; ?>" required><br><br>
        
        <input type="submit" value="Salvar Alterações">
    </form>
</body>
</html>
