<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respostas = [
        'q1' => $_POST['q1'] ?? '',
        'q2' => $_POST['q2'] ?? '',
        'q3' => $_POST['q3'] ?? '',
        'q4' => $_POST['q4'] ?? '',
    ];

    $gabarito = [
        'q1' => 'a',
        'q2' => 'c',
        'q3' => 'b',
        'q4' => 'b',
    ];

    $pontuacao = 0;

    foreach ($gabarito as $questao => $resposta_correta) {
        if (isset($respostas[$questao]) && $respostas[$questao] == $resposta_correta) {
            $pontuacao++;
        }
    }

    echo "<h1>Resultado do Formulário</h1>";
    echo "Você acertou $pontuacao de 4 perguntas.";
} else {
    echo "Nenhuma resposta foi enviada.";
}
?>