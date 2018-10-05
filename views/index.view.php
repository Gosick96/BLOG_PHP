<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<title>Blog</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="#">Primer Blog</a></p>
			</div>
			<div class="derecha">
				<form action="<?php echo RUTA; ?>/busar.php" method="get" class="buscar">
					<input class="buscar" type="text" name="busqueda" placeholder="Buscar">
					<button type="submit" class="icono"><i class="fas fa-search"></i></button>
				</form>
				<nav class="menu">
					<ul>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#">Contacto <i class="fas fa-envelope"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Titulo del articulo</h2>
				<p class="fecha"> 4 de octube de 2018</p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA; ?>/images/01.jpg" alt="">
					</a>
				</div>
			</article>
		</div>
	</div>
</body>
</html>