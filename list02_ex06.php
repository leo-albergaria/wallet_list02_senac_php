<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercicio 06</title>
</head>

<body>

    <!-- Crie uma página em HTML5 em que o usuário digite seu peso e sua altura e um
    programa PHP para o cálculo do IMC da pessoa. Defina se a pessoa está acima ou
    abaixo do peso. Procure referências sobre este índice (o que é considerado normal,
    abaixo ou acima do peso). -->

    <?php

    $peso = 87;
    $altura = 1.78;
    $imc = $peso / ($altura ^ 2);
    echo ("Seu IMC é " . round($imc, 2) . " kg/m2<br>");

    switch ($imc > 0) {
        case ($imc >= 0 && $imc < 17):
            echo "Muito abaixo do peso<br>";
            break;
        case ($imc >= 17 && $imc < 18.5):
            echo "Abaixo do peso<br>";
            break;
        case ($imc >= 18.5 && $imc < 25):
            echo "Peso normal<br>";
            break;
        case ($imc >= 25 && $imc < 30):
            echo "Acima do peso<br>";
            break;
        case ($imc >= 30 && $imc < 35):
            echo "Obesidade Grau I<br>";
            break;
        case ($imc >= 35 && $imc <= 40):
            echo "Obesidade Grau II";
            break;
        default:
            echo "Obesidade Grau III<br>";
    }
    ?>

</body>

</html>