<?php 

	session_start();
	
	// variável que verifica se a autenticação foi realizada
	$usuario_autenticado = false;

	// usuários do sistema
	$usuarios_app = [
		['email' => 'adm@teste.com.br', 'senha' => '123456'],
		['email' => 'user@teste.com.br', 'senha' => 'abcd']
	];

	foreach ($usuarios_app as $user) {

		if ($user['email'] == $_POST['email'] AND $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
		}
	}

	if ($usuario_autenticado) {
		$_SESSION['autenticado'] = true;
		header('Location: home.php');
	} else {
		$_SESSION['autenticado'] = false;
		header('Location: index.php?login=erro');
	}
