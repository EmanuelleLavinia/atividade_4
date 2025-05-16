<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
</head>
<body>
    <h1>Calculadora</h1>
     <form id="formulario_5" action="pages/formulario_5/saida5.php" method="POST">
        <label for="numero1">Número 1:</label><br>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Número 2:</label><br>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <label for="operacao">Operação:</label><br>
        <select id="operacao" name="operacao" required>
            <option value="soma">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>