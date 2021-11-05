<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercício 03</title>
</head>

<body>

    <!-- Crie um software PHP que receba quatro notas de um aluno, calcule e imprima a
    média aritmética das notas e a mensagem de aprovado para média superior ou igual a
    7.0, a mensagem de reprovado para média inferior a 4.0 e recuperação para notas
    maior que 4 e menor que 7. -->

    <?php

    $n1 = 6;
    $n2 = 6;
    $n3 = 8;
    $n4 = 8;
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    echo ("Média: " . $media . "<br>");
    if ($media >= 7.0)
        echo ("Aprovado");
    else if ($media < 4)
        echo ("Reprovado");
    else
        echo ("Recuperação");
    ?>

</body>

</html>