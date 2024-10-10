<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
</head>

<body>
    <form action="testFuncionario.php" method="get">
        Nome: <input type="text" name="nome"><br><br>
        ValorHora: <input type="text" name="valorHora"><br><br>
        TotalHoras: <input type="text" name="totalHoras"><br><br>
        Bonus: <input type="text" name="bonus"><br><br>
        Salario: <input type="text" name="salario"><br><br>
        Tipo: <select name="tipo">
            <option value="assalariado">assalariado</option>
            <option value="horista">horista</option>
        </select><br><br>
        <input type="submit" value="Cadastrar"><br><br>
    </form>
</body>

</html>