<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercício 09 - Imprimir</title>
</head>

<body>
    <!-- A biblioteca do SENAC deseja fazer um algoritmo que leia o nome do livro que será
    emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo
    conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o
    livro o aluno somente 3 dias. -->

    <h1>Biblioteca SENAC</h1>
    <h2>Recibo de emprestimo de Livro</h2>

    <h3><?php echo ($_POST['livro']) ?></h3>
    <p><?php echo ($_POST['user_type'] . " " . $_POST['nome']) ?> </p>

    <p>Retirado em <b><?php echo date('d-m-yy', strtotime(($_POST['data']))) ?></b></p>

    <p> Deverá ser devolvido até
        <b><?php
            if ($_POST['user_type'] == "Professor")
                echo date('d-m-yy', strtotime(($_POST['data'] . " + 10 day")));
            else
                echo date('d-m-yy', strtotime(($_POST['data'] . " + 3 day")));
            ?></b>
    </p>
</body>

</html>