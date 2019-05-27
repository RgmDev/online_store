<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  <title><?php echo $tituloPagina; ?></title>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.min.css">
	
	<!-- CSS (Only fonts definition) -->
	<link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>


	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
			
			<a class="navbar-brand" href="#">LOGOTIPO</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			
				<form class="form-inline my-2 my-lg-0 mr-auto">
					<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
				</form>
				
				<ul class="navbar-nav">
					<li class="nav-item <?php if($pagina=="inicio"){echo 'active';} ?>">
						<a class="nav-link" href="index.php">Inicio<?php if($pagina=="inicio"){echo '<span class="sr-only">(current)</span>';} ?></a>
					</li>
					<li class="nav-item <?php if($pagina=="nosotros"){echo 'active';} ?>">
						<a class="nav-link" href="nosotros.php">Nosotros<?php if($pagina=="nosotros"){echo '<span class="sr-only">(current)</span>';} ?></a>
					</li>
          <li class="nav-item <?php if($pagina=="productos"){echo 'active';}?>">
						<a class="nav-link" href="productos.php">Productos<?php if($pagina=="productos"){echo '<span class="sr-only">(current)</span>';} ?></a>
					</li>
          <li class="nav-item <?php if($pagina=="contacto"){echo 'active';}?>">
						<a class="nav-link" href="contacto.php">Contacto<?php if($pagina=="contacto"){echo '<span class="sr-only">(current)</span>';} ?></a>
					</li>
				</ul>
				
			</div>
			
		</nav>
	</header>