<?php
//Inclui o arquivo que contém a definição da classe $disciplina
require_once "classes/Disciplina.php";
//Cria um novo objeto dis$disciplina
$disciplina = new Disciplina();

//Define as propriedades descdis$disciplina e ano do objeto $disciplina
//com os valores enviados pelo formulário
$disciplina->nomeDisciplina = $_POST['nomeDisciplina'];
$disciplina->cargaHoraria=$_POST['cargaHoraria'];

//Chama o método inserir() no objeto $disciplina para inserir
// os dados da nova $disciplina no banco de dados
$disciplina->inserir();
?>
