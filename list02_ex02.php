<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercício 02</title>
</head>

<body>
    <!-- Entrar com 3 números e imprimi-los em ordem decrescente (suponha números
    diferentes). -->

    <?php
    $ordem = array(6, 4, 5);
    sort($ordem);
    foreach ($ordem as $ordem) {
        echo $ordem;
    }
    ?>

</body>

</html>