<?php
if (isset($_GET['termo'])) {
    $termo = $_GET['termo'];

    echo "<h1>Resultado da Pesquisa</h1>";
    echo "Você pesquisou por: " . htmlspecialchars($termo);
} else {
    echo "Nenhum termo foi pesquisado.";
}
?>