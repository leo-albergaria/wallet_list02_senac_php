<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercício 08</title>
</head>

<body>

    <!-- Construa um script em PHP que calcula a quantidade de litros de combustível gastos
    em uma viagem utilizando-se um automóvel que faz 12 Km por litro. O tempo gasto
    da viagem e a velocidade média durante a mesma são fornecidos através de
    formulário. O algoritmo deverá apresentar como resultado os valores da velocidade
    média, tempo gasto na viagem, a distância percorrida e a quantidade de litros
    utilizados na viagem. -->

    <form action="list02_ex08_calcular.php" method="post">
        <p>Vamos calcular a média de gasto de gasolina? <br></p>
        <p>Qual o tempo gasto na viagem: <input type="text" name="tempo" autocomplete="new-password" /> horas</p>
        <p>Velocidade média durante a viagem: <input type="text" name="velocidade" autocomplete="new-password" /> Km/h</p>
        <p><input type="submit" value="Calcular Dados" /> </p>
    </form>

</body>

</html>