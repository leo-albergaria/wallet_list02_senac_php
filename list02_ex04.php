<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercício 04</title>
</head>

<body>

    <!-- Crie um algoritmo que receba a altura e o sexo de uma pessoa, calcule e imprima o
    seu peso ideal, utilizando as seguintes fórmulas: • para homens: (72.7 * H) – 58 • para
    mulheres: (62.1 * H) – 44.7 -->

    <?php

    $altura = 1.78;
    $sexo = "Masculino";
    if ($sexo == "Masculino")
        echo ("Seu peso ideal é " . (72.7 * $altura) - 58);
    else if ($sexo == "Feminino")
        echo ("Seu peso ideal é " . (62.1 * $altura) - 44.7);
    ?>

</body>

</html>