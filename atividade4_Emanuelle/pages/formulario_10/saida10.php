<?php
session_start();

if (!isset($_SESSION['votos'])) {
    $_SESSION['votos'] = [
        "As Crônicas de Nárnia" => 0,
        "Jogos Vorazes" => 0,
        "Harry Potter" => 0,
        "Maze Runner" => 0
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['livro'])) {
    $livro = $_POST['livro'];

    if (array_key_exists($livro, $_SESSION['votos'])) {
        $_SESSION['votos'][$livro]++;

        echo "<h1>Obrigado pelo seu voto!</h1>";
        echo "Você votou em: $livro<br><br>";
        echo "<h2>Resultados atuais:</h2><ul>";
        foreach ($_SESSION['votos'] as $titulo => $votos) {
            echo "<li>$titulo: $votos voto(s)</li>";
        }
        echo "</ul>";
    } else {
        echo "Opção inválida.";
    }
} else {
    echo "Nenhuma opção foi selecionada.";
}
?>
