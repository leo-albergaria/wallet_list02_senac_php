<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 02 - Exercício 09</title>
</head>

<body>
    <!-- A biblioteca do SENAC deseja fazer um algoritmo que leia o nome do livro que será
    emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo
    conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o
    livro o aluno somente 3 dias. -->

    <form action="list02_ex09_imprimir.php" method="post">
        <p>Olá, Bem Vindo a Biblioteca do SENAC <br></p>
        <p>Qual o seu nome: <input type="text" name="nome" autocomplete="new-password" /></p>
        <p>Qual título do Livro: <input type="text" name="livro" autocomplete="new-password" /></p>
        <p>Dia da retirada do livro: <input type="date" name="data" /></p>
        <p>Tipo do usuário:
            <input type="radio" id="professor" name="user_type" value="Professor"><label for="professor">Professor</label>
            <input type="radio" id="aluno" name="user_type" value="Aluno" checked><label for="aluno">Aluno</label><br>
        </p>

        <p><input type="submit" value="Imprimir Recibos" /> </p>
    </form>

</body>

</html>