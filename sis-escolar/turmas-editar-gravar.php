<?php
// Inclui o arquivo que contém a definição da classe Turma
require_once 'classes/Turma.php';

// Obtém o vlaor do parâmetro "id" da URL e armazena em variável
$id = $_POST['id'];

// Cria um novo objeto Turma;
$turma = new Turma($id);

//Define as propriedades descTurma e ano do objeto Turma
$turma-> descTurma = $_POST['descTurma'];
$turma-> ano = $_POST['ano'];

//Chama o método atualizar() no objeto Turma
$turma->atualizar();

// Redireciona a página para a listagem de turmas "turmas-listar.php"
header('Location: turmas-listar.php');
?>