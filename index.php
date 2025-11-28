<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplos PHP</title>
</head>
<body>
    <h1>Exemplos em PHP</h1>

<!--Yasmin Tonietti, 4° Bimestre, Lógica da Programação-->

<?php
date_default_timezone_set ('America/Sao_Paulo');
$data=date('d/m/y');
$hora=date('h:i:s');
echo "<p>Data:$Data -- Hora: $hora </p>";
?>

   <ul>
        <li><a href="hello.php" target="_blank">Hello World</a></li>
        <li><a href="variaveis.php" target="_blank">Variáveis</a></li>
        <li><a href="operacoes.php" target="_blank">Operações Matemáticas</a></li>
        <li><a href="concatenacao.php" target="_blank">Concatenação de Strings</a></li>
        <li><a href="condicao.php" target="_blank">Condições</a></li>
        <li><a href="loop.php" target="_blank">Loop com Variáveis</a></li>
    </ul>
</body>
</html>