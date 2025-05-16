<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Feedback de Produto</title>
</head>
<body>
    <h1>Feedback de Produto</h1>
     <form id="formulario_6" action="pages/formulario_6/saida6.php" method="POST">
        <label for="produto">Nome do Produto:</label><br>
        <input type="text" id="produto" name="produto" required><br><br>

        <label for="avaliacao">Avaliação (1 a 5 estrelas):</label><br>
        <select id="avaliacao" name="avaliacao" required>
            <option value="1">1 estrela</option>
            <option value="2">2 estrelas</option>
            <option value="3">3 estrelas</option>
            <option value="4">4 estrelas</option>
            <option value="5">5 estrelas</option>
        </select><br><br>

        <label for="comentarios">Comentários:</label><br>
        <textarea id="comentarios" name="comentarios" required></textarea><br><br>

        <input type="submit" value="Enviar Feedback">
    </form>
</body>
</html>