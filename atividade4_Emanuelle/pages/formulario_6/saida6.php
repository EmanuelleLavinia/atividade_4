<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = htmlspecialchars($_POST['produto']);
    $avaliacao = intval($_POST['avaliacao']);
    $comentarios = htmlspecialchars($_POST['comentarios']);

    echo "<h1>Resumo do Feedback</h1>";
    echo "Produto: " . $produto . "<br>";
    echo "Avaliação: " . str_repeat("★", $avaliacao) . str_repeat("☆", 5 - $avaliacao) . " ($avaliacao estrelas)<br>";
    echo "Comentários:<br>" . nl2br($comentarios);
} else {
    echo "Nenhum feedback foi enviado.";
}
?>
