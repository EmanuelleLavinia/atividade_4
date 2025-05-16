<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Contato</h1>
     <form id="formulario_4" action="pages/formulario_4/saida4.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="assunto">Assunto:</label><br>
        <input type="text" id="assunto" name="assunto" required><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>