<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    echo "<h1>Contato Recebido</h1>";
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Assunto: " . $assunto . "<br>";
    echo "Mensagem: " . $mensagem . "<br>";
} else {
    echo "Nenhum dado foi enviado.";
}
?>