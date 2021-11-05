<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercício 01</title>
</head>

<body>

    <!-- Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado
    seja maior que 20, este deverá ser mostrado somando-se a ele mais 8; caso o valor
    somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5. -->
    <?php
    $n1 = 34;
    $n2 = 31;
    $soma = $n1 + $n2;
    if ($soma > 20)
        echo ("Somando-se a ele mais 8: " . $soma + 8);
    else
        echo ("Apresentado subtraindo-se 5: " . $soma - 5);
    ?>

</body>

</html>