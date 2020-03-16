<?php 

	session_start();

	// montando o texto
	$texto = $_SESSION['id'] . '#' . implode('#', str_replace('#', '-', $_POST)) . PHP_EOL;

	// abrindo o arquivo
	$arquivo = fopen('arquivo.hd', 'a');

	// escrevendo o texto
	fwrite($arquivo, $texto);

	// fechando o arquivo
	fclose($arquivo);

	header('Location: abrir_chamado.php');
