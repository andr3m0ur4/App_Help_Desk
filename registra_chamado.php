<?php 

	// montando o texto
	$texto = implode('#', str_replace('#', '-', $_POST)) . PHP_EOL;

	// abrindo o arquivo
	$arquivo = fopen('arquivo.hd', 'a');

	// escrevendo o texto
	fwrite($arquivo, $texto);

	// fechando o arquivo
	fclose($arquivo);

	header('Location: abrir_chamado.php');
