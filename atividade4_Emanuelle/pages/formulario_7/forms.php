<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Registro de Evento</title>
</head>
<body>
    <h1>Registro de Participante</h1>
     <form id="formulario_7" action="pages/formulario_7/saida7.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="evento">Evento de Interesse:</label><br>
        <select id="evento" name="evento" required>
            <option value="Evento 1">Evento 1</option>
            <option value="Evento 2">Evento 2</option>
            <option value="Evento 3">Evento 3</option>
        </select><br><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>