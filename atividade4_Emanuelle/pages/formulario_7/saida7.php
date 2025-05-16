<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $evento = htmlspecialchars($_POST['evento']);

    echo "<h1>Participante Registrado</h1>";
    echo "<ul>";
    echo "<li>Nome: $nome</li>";
    echo "<li>Email: $email</li>";
    echo "<li>Evento de Interesse: $evento</li>";
    echo "</ul>";
} else {
    echo "Nenhum dado foi enviado.";
}
?>
