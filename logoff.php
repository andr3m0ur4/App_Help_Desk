<?php 

	session_start();

	session_destroy();
	header('Location: index.php');

	// remover índices do array de sessão
	// unset()

	// destruir a variável de sessão
	// session_destroy()
