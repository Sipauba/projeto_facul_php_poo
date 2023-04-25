<!DOCTYPE html>
<html>
<head>
	<title>Agenda</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		
		h1 {
			text-align: center;
			margin-top: 50px;
			font-size: 36px;
		}
		
		h2 {
			font-size: 24px;
			margin-top: 30px;
		}
		
		label {
			display: block;
			margin-top: 20px;
			font-size: 18px;
		}
		
		input[type="text"], input[type="email"], input[type="tel"], input[type="date"], input[type="time"] {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			border: none;
			border-radius: 4px;
			box-shadow: 0 0 5px rgba(0,0,0,0.1);
			margin-top: 5px;
			margin-bottom: 20px;
		}
		
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
		}
		
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: white;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
			margin-top: 50px;
			margin-bottom: 50px;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<h1>Agenda</h1>
		
        <?php
	
	// incluir as classes PHP
	include_once('classes/pessoa.class.php');
	include_once('classes/contato.class.php');
	include_once('classes/compromisso.class.php');
	
	// verificar se o formulário foi enviado
	if (isset($_POST['submit'])) {
		
		// obter os valores do formulário
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$titulo = $_POST['titulo'];
		$data = $_POST['data'];
		$hora = $_POST['hora'];
		$local = $_POST['local'];
		
		// criar um novo contato
		$contato = new Contato($nome, $email, $telefone);
		$contato->setNome($nome);
		$contato->setEmail($email);
		$contato->setTelefone($telefone);
		
		// criar um novo compromisso
		$compromisso = new Compromisso($titulo, $data, $hora, $local);
		$compromisso->setTitulo($titulo);
		$compromisso->setData($data);
		$compromisso->setHora($hora);
		$compromisso->setLocal($local);
		
		// exibir as informações do compromisso
		echo "<h2>Compromisso</h2>";
		echo "<p>Título: " . $compromisso->getTitulo() . "</p>";
		echo "<p>Data: " . $compromisso->getData() . "</p>";
		echo "<p>Hora: " . $compromisso->getHora() . "</p>";
		echo "<p>Local: " . $compromisso->getLocal() . "</p>";
		
		// exibir as informações do contato
		echo "<h2>Contato</h2>";
		echo "<p>Nome: " . $contato->getNome() . "</p>";
		echo "<p>Email: " . $contato->getEmail() . "</p>";
		echo "<p>Telefone: " . $contato->getTelefone() . "</p>";

		$compromisso->notificar();
	}
	
	?>
	
	<h2>Adicionar compromisso</h2>
	<form method="post" action="">
		<label>Título:</label><br>
		<input type="text" name="titulo"><br>
		<label>Data:</label><br>
		<input type="date" name="data"><br>
		<label>Hora:</label><br>
		<input type="time" name="hora"><br>
		<label>Local:</label><br>
		<input type="text" name="local"><br>
		<label>Nome:</label><br>
		<input type="text" name="nome"><br>
		<label>Email:</label><br>
		<input type="email" name="email"><br>
		<label>Telefone:</label><br>
		<input type="tel" name="telefone"><br>
		<input type="submit" name="submit" value="Adicionar">
	</form>		
	</div>
</body>
</html>