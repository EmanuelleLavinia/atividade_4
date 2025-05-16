<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form id="formulario_1" action="pages/formulario_1/saida1.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>
