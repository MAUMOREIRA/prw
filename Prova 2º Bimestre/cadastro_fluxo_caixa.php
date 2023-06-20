<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h3>Cadastro de Fluxo de caixa</h3>
    <form action="cadastro_fluxo_caixa.php" method="POST">
        <div>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data">
        </div>
        <div>
            <label for="tipo">Tipo:</label>
            <input type="radio" name="tipo" id="tipo" value="entrada"> Entrada
            <input type="radio" name="tipo" id="tipo" value="saida"> Saída
        </div>
        <div>
            <label for="valor">Valor:</label>
            <input type="number" min="0" name="valor" step=".01" id="valor">
        </div>
        <div>
            <label for="historico">Histórico</label>
            <input type="text" name="historico" id="historico">
        </div>
        <div>
            <label for="cheque">Cheque:</label>
            <select name="cheque" id="cheque" size="1">
                <option value="sim">Sim</option>
                <option value="nao">Nao</option>
            </select>
        </div>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>