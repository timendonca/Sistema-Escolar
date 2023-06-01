<?php
class Disciplina{
    public $id;
    public $nomeDisciplina;
    public $cargaHoraria;

    public function inserir(){
    //Define a string SQL de inserção de dados na tabela "tb_disciplinas"
        $sql = "INSERT INTO tb_disciplinas (nomeDisciplina, cargaHoraria) VALUES ('" .$this->nomeDisciplina. "','".$this->cargaHoraria."')";

    //Cria uma nova conexão PDO com o banco de dados "sis-escolar"
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

    //Executa a string SQL na conexão, inserindo os dados na tabela "tb_disciplinas"
    $conexao->exec($sql);
    echo "Registro gravado com sucesso!";
    }

    public function listar(){
        //Define a string SQL para selecionar todos os registros da tabela
        $sql = "SELECT * FROM tb_disciplinas" ;

        //Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        //Executa a string SQL na conexão retornando um objeto de resultado
        $resultado=$conexao->query($sql);

        //Extrai todos os registros do objeto e os armazena em um array
        $lista=$resultado->fetchAll();

        //Retorna o array contendo todos os registros da tabela "tb_disciplinas"
        return $lista;
    }
}
?>
