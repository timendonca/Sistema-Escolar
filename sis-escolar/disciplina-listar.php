<?php
//Inclui o arquivo que contém a classe Turma
require_once "classes/Disciplina.php";

//Cria um novo objeto Turma
$disciplina= new Disciplina();

//Chama o método "listar" e armazena o resultado em uma variável
$lista = $disciplina->listar();
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
    <h2>Sistema Acadêmico</h2>
    <h3>Listar Disciplinas</h3>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Carga Horária</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($lista as $linha):?>
        <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['nomeDisciplina'] ?></td>
            <td><?php echo $linha['cargaHoraria'] ?></td>
            <td>
                <a href="#">Atualizar</a>
                <a href="#">Excluir</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
