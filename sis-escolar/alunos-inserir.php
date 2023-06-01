<?php
	require_once "classes/Turma.php";
	$turma = new Turma();
	$lista = $turma->listar();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inserir Alunos</title>
</head>
<body>
	<h1>Sistema Acadêmico</h1>
	<h3>Novo Aluno</h3>

	<form action="alunos-gravar.php">
		<label for="txtnome">Nome:</label>
		<input type="text" name="txtnome"><br><br>
		<select name="selturma">
			<option value="">Selecione...</option>
			<?php
				foreach ($lista as $linha):
				echo "<option value='{$linha['id']}'>{$linha['descTurma']}</option>";
				endforeach
			?>
		</select>
		<input type="submit" value="Gravar">
	</form>

</body>
</html>