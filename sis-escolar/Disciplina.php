<?php

class Disciplina

{
public $id;
public $nomeDi;
public $ano;


public function inserir()
{

$sql = "INSERT INTO tb_discipli (nomeDi, ano) VALUES (
	'" .$this->nomeDi. "',
	'" .$this->ano."'
)";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
$conexao->exec($sql);

echo "Registro gravado com sucesso";
}
public function listar()
{
$sql= "SELECT * FROM tb_discipli";
$conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
$resultado = $conexao->query($sql);
$lista=$resultado->fetchALL();
return $lista;
}
}
?>