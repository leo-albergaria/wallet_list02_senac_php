<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercício 07</title>
</head>

<body>

    <!-- Construa um algoritmo que leia o salário de 3 pessoas, escreva o maior valor e a
    diferença percentual para o menor valor -->

    <?php

    $salario = array(2000, 1000, 4000);
    sort($salario);
    echo ("Maior salário é " . $salario[2] . "<br>");
    echo ("Diferença para o menor é " . ((($salario[2] / $salario[0]) - 1) * 100) . "%<br>");

    ?>

</body>

</html>