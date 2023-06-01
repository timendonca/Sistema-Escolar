<?php  

class Aluno
{
	public $id;
	public $nome;
	public $turma_id;

	public function __construct($id = false){
		if($id){
			$this->id = $id;
			$this->carregar();
		}
	}

	public function inserir(){
		$sql = "INSERT INTO tb_aluno (nome, turma_id) VALUES (
				'{$this->nome}', '{$this->turma_id}')";
		include_once "classes/conexao.php";
		$conexao -> exec($sql);
		echo "Registro gravado com sucesso!";
	}

	public function listar(){
		$sql = "SELECT  a.id, a.nome, a.turma_id, t.decTurma
				FROM tb_aluno a INNER JOIN td_turmas t
				ON a.turma_id = t.id
				ORDER BY a.id";
		include_once "classes/conexao.php";
		$resultado = $conexao->query($sql);
		$lista = $resultado->fetchALL();
		return $lista;
	}
	public function carregar(){
        //Query SQL para buscar uma turma no banco de dados pelo id
        $sql = "SELECT * FROM tb_turmas WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');

        //Execução da query e armazenamento do resultado em uma variável
        $resultado = $conexao-> query($sql);
        //Recuperação da primeira linha do resultado com um array associativo
        $linha = $resultado-> fetch();

        //Atribuição dos valores dos campos recuperados do banco
        $this->id = $linha['id'];
        $this->nome = $linha['nome'];
        $this->turma_id = $linha['turma_id'];
    }

    public function excluir(){
        //Define a string da consulta SQL para deletar um registro da tabela "tb_turmas" com base no seu id
        $sql = "DELETE FROM tb_alunos WHERE id =".$this->id;

        //Cria uma nova conexão PDO com o banco de dados localizado no servidor "127.0.0.1" e autentica com o usuário "root" (sem senha)
        $conexao = new PDO ('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');

        //Executa a instrução SQL de exclusão utilizando o método "exec" do objeto de conexão PDO criado acima
        $conexao ->exec($sql);
    }

    public function atualizar(){
        //Query SQL para atualizar uma turma no banco de dados pelo ID
        $sql = "UPDATE tb_alunos SET 
                id = '$this->id', 
                nome = '$this->nome',
                turma_id = '$this->turma_id',
                WHERE id = $this->id ";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root' , '');
        $conexao->exec($sql);
    }
}

?>