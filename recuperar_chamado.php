<?php  

	// chamados
	$chamados = [];

	// abrir o arquivo.hd
	$arquivo = fopen('arquivo.hd', 'r');

	// enquanto houver registros (linhas) a serem recuperados
	while (!feof($arquivo)) {	// testa pelo fim de um arquivo
		$registro = fgets($arquivo);
		$chamados[] = $registro;
	}

	// fechar o arquivo aberto
	fclose($arquivo);

	// criação de um array para armazenar cada chamado
	$chamado_dados = [];

	foreach ($chamados as $chamado) {
		$dados = explode('#', $chamado);

		if ($_SESSION['perfil_id'] == 2) {
			// exibir somente o chamado, caso ele tenha sido criado por esse usuário
			if ($_SESSION['id'] != $dados[0]) {
				continue;
			}
		}

		if (count($dados) < 3) {
			continue;
		}

		$chamado_dados[] = $dados;
	}
