<?php  

	session_start();

	if (!isset($_SESSION['autenticado']) OR !$_SESSION['autenticado']) {
		header('Location: index.php?login=erro2');
	}

?>

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
				<a class="navbar-brand" href="#">
					<img src="image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
					App Help Desk
				</a>
			</nav>
		</header>

		<main class="container">    
			<div class="row">
				<div class="card-consultar-chamado">
					<div class="card">
						<div class="card-header">
							Consulta de chamado
						</div>
						
						<div class="card-body">
							
							<div class="card mb-3 bg-light">
								<div class="card-body">
									<h5 class="card-title">Título do chamado...</h5>
									<h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
									<p class="card-text">Descrição do chamado...</p>

								</div>
							</div>

							<div class="card mb-3 bg-light">
								<div class="card-body">
									<h5 class="card-title">Título do chamado...</h5>
									<h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
									<p class="card-text">Descrição do chamado...</p>

								</div>
							</div>

							<div class="row mt-5">
								<div class="col-6">
									<button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

	</body>
</html>