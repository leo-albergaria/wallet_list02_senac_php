<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercício 02 - Calcular</title>
</head>

<body>

    <!-- O algoritmo deverá apresentar como resultado os valores da velocidade
    média, tempo gasto na viagem, a distância percorrida e a quantidade de litros
    utilizados na viagem. -->
    <p>Então, já podemos calcular a média de gasto de gasolina? <br></p>
    <?php $tempo = $_POST['tempo']; ?>
    <?php $velocidade = $_POST['velocidade'] ?>

    <p>A velocidade média é <b><?php echo ($velocidade); ?></b> Km/h.</p>
    <p>O tempo gasto na viagem é <b><?php echo ($tempo); ?></b> horas.</p>
    <p>A distância pecorrida é <b><?php echo ($tempo * $velocidade); ?></b> km.</p>
    <p>A quantidade de litro(s) gasto(s): <b><?php echo (($tempo * $velocidade) / 12); ?></b> litro(s).</p>

</body>

</html>