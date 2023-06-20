<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "prova2";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}


$sql = "SELECT * FROM tabela ORDER BY codigo";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Informações Cadastradas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Informações Cadastradas</h1>
    <table>
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
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['codigo'] . "</td>";
                echo "<td>" . $row['data'] . "</td>";
                echo "<td>" . $row['tipo'] . "</td>";
                echo "<td>" . $row['valor'] . "</td>";
                echo "<td>" . $row['historico'] . "</td>";
                echo "<td>" . $row['cheque'] . "</td>";
                echo "<td><a href='excluir.php?id=" . $row['codigo'] . "'>Excluir</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Nenhum registro encontrado.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php

$conn->close();
?>