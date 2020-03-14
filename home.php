<?php require_once 'validador_acesso.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>App Help Desk</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">

	</head>

	<body>

		<header>
			<nav class="navbar navbar-dark bg-dark">
				<a class="navbar-brand" href="home.php">
					<img src="image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
					App Help Desk
				</a>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="logoff.php">SAIR</a>
					</li>
				</ul>
			</nav>
		</header>

		<main class="container">    
			<div class="row">
				<div class="card-home">
					<div class="card">
						<div class="card-header">
							Menu
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-6 d-flex justify-content-center">
									<a href="abrir_chamado.php">
										<img src="image/formulario_abrir_chamado.png" width="70" height="70">
									</a>
								</div>
								<div class="col-6 d-flex justify-content-center">
									<a href="consultar_chamado.php">
										<img src="image/formulario_consultar_chamado.png" width="70" height="70">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

	</body>
</html>