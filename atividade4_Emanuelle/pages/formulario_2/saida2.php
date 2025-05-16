<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    
    $usuarioCorreto = "usuário";
    $senhaCorreta = "4321";

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        echo "<h1>Login bem-sucedido!</h1>";
        echo "Bem-vindo, " . htmlspecialchars($usuario) . "!";
    } else {
        echo "<h1>Erro no login</h1>";
        echo "Usuário ou senha incorretos.";
    }
}
?>