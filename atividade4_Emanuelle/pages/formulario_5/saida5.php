<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = floatval($_POST['numero1']);
    $num2 = floatval($_POST['numero2']);
    $operacao = $_POST['operacao'];
    $resultado = "";

    switch ($operacao) {
        case "soma":
            $resultado = $num1 + $num2;
            break;
        case "subtracao":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacao":
            $resultado = $num1 * $num2;
            break;
        case "divisao":
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Erro: divisão por zero!";
            }
            break;
        default:
            $resultado = "Operação inválida.";
    }

    echo "<h1>Resultado</h1>";
    echo "Resultado da operação: . $resultado ;
} else {
    echo "Nenhum dado foi enviado.";
}
?>