<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);

    echo "Inscrição Confirmada, $email";

} else {
    echo "Nenhum dado foi enviado.";
}
?>

