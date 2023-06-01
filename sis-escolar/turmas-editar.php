<?php
//Inclui o arquivo que contém a definição da classe Turma
require_once "classes/Turma.php";

//Obtém o valor do parâmetro "id" da URL e armazena em variável
$id = $_GET['id'];

//Cria um novo objeto da classe Turma
$turma = new Turma($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico</h1>
    <h3>Nova Turma</h3>
    <form action="turmas-editar-gravar.php" method="post">
        <input type="hidden" name="id" value="<?= $turma->id ?>">
        <label for="descTurma">Turma:</label>
        <input type="text" name="descTurma" value="<?= $turma->descTurma ?>">
        <br><br>
        <label for="ano">Ano:</label>
        <input type="number" name="ano" value="<?= $turma->ano ?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
    
</body>
</html>