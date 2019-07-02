<html>
<head>
		<title>
			Event Discover - Eventos
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <!--Aceptar caracteres especiales-->
</head>

<body>

	<div id="busqueda">						<!--Buscar eventos-->
		
			<input type="search" placeholder="Buscar..." name="buscartxt">
			<input type="submit" class="button" name="buscarbtt" value="Buscar">

	</div>									<!--Fin de la barra de busqueda-->

	<div id="usuario" action="">					<!--Menu Usuario-->
		
		<ul class="nav">
			<h3><?php
			#include ("funciones/users-login.php");
			session_start();
			echo $_SESSION['usuario']; ?></h3>
			<ul>
				<li><a href="nvo-evento.php">Agregar evento</a></li>
				<li><a href="funciones/users-loguot.php">Cerrar sesión</a></li>
			</ul>
		</ul>
	</div>								<!--Fin del menu usuario-->

	<div id="eventos" name="lista-eventos">					<!--Enlistado de eventos-->
			<?php 
				include ("funciones/event-new.php");

				$elementos = new Event;
				$elementos->ListarAllEvents();


			?>
			
	</div>								<!--Fin del listado de eventos-->



</body>
</html