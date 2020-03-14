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
				<a class="navbar-brand" href="#">
					<img src="image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
					App Help Desk
				</a>
			</nav>
		</header>

		<main class="container">    
			<div class="row">
				<div class="card-abrir-chamado">
					<div class="card">
						<div class="card-header">
							Abertura de chamado
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									
									<form>
										<div class="form-group">
											<label>Título</label>
											<input type="text" class="form-control" placeholder="Título">
										</div>
										
										<div class="form-group">
											<label>Categoria</label>
											<select class="form-control">
												<option>Criação Usuário</option>
												<option>Impressora</option>
												<option>Hardware</option>
												<option>Software</option>
												<option>Rede</option>
											</select>
										</div>
										
										<div class="form-group">
											<label>Descrição</label>
											<textarea class="form-control" rows="3"></textarea>
										</div>

										<div class="row mt-5">
											<div class="col-6">
												<button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
											</div>

											<div class="col-6">
												<button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
											</div>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

	</body>
</html>