<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Enquete: Livros Favoritos</title>
</head>
<body>
    <h1>Qual é o seu universo de livros favorito?</h1>
    <form id="formulario_10" action="pages/formulario_10/saida10.php" method="POST">
        <input type="radio" name="livro" value="As Crônicas de Nárnia" required> As Crônicas de Nárnia<br>
        <input type="radio" name="livro" value="Jogos Vorazes"> Jogos Vorazes<br>
        <input type="radio" name="livro" value="Harry Potter"> Harry Potter<br>
        <input type="radio" name="livro" value="Maze Runner"> Maze Runner<br><br>

        <input type="submit" value="Votar">
    </form>
</body>
</html>
