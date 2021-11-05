<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercício 10</title>
</head>

<body>
    <!-- Construa um algoritmo que seja capaz de realizar reajustes salariais. Ele deve calcular
    e imprimir o salário reajustado de um funcionário de acordo com a seguinte regra:
    • salários até 3000, reajuste de 50%
    • salários maiores que 3000, reajuste de 30% -->

    <?php

    $salarios = array(1245.00, 4567.00, 2123.00, 1300.00, 5000.00);
    sort($salarios);
    foreach ($salarios as $key => $value) {
        if ($value >= 3000) {
            echo ("Funcionário " . $key + 1 . " recebe {$value} e terá 30% de reajuste. Salário reajustado em " . ($value * 1.30) . " <br>");
        } else
            echo ("Funcionário " . $key + 1 . " recebe {$value} e terá 50% de reajuste. Salário reajustado em " . ($value * 1.50) . " <br>");
    }
    ?>
</body>


</html>