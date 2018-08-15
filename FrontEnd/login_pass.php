<?php
    session_start();

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    } else {
        header('Location: index.php');
    }
    $now = time();

    if($now > $_SESSION['expire']) {
        header('Location: index.php');
    }
?>
<html lang="es">
	<head>
	    <!--GENERA TODO EL CSS PARA QUE TOME FORMA Y NO SOLO SEA HTML-->
		<link rel="stylesheet" type="text/css" href="./Sinaloense_files/STB.css">
		<!-- GENERA UN BOTON CUANDO LA PANTALLA SE HACE MAS PEQUEÑA Y MUESTRA LA BARRA PRINCIPAL-->
		<link href="./Sinaloense_files/css" rel="stylesheet" type="text/css">
		<script src="./Sinaloense_files/jquery-latest.js.descarga"></script>
	    <script src="./Sinaloense_files/main.js.descarga"></script>		
	</head>
	<body>
	<header class="h-body_bajo">
		<div class="logo"><img src="./Sinaloense_files/logo.png"></div>
		
		<div class="menu_bar">
				<a class="bt-menu"><img src="./Sinaloense_files/circular-menu-button.png"></a>
				
		</div>
	</header>
	<nav>
		<ul>
	        <li><a href="../BackEnd/logout.php"><span class="icon-earth"></span>Cerrar sesión</a></li>   <!-- pagina del index-->
		    <div class="dropdown">
				<button class="dropbtn">Usuarios</button>
				<div class="dropdown-content">
					<a href="../BackEnd/Usuarios/form_usuarios.php">Registrar Usuario</a>
					<a href="../BackEnd/Usuarios/consultarUsuario.php">Consultar Usuarios</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Marcas</button>
				<div class="dropdown-content">
					<a href="../BackEnd/Marcas/form_marca.php">Insertar Marca</a>
					<a href="../BackEnd/Marcas/consultMarcas.php">Consultar Marcas</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Refacciones</button>
				<div class="dropdown-content">
					<a href="../BackEnd/Refacciones/form_refacciones.php">Insertar Refaccion</a>
					<a href="../BackEnd/Refacciones/consultasRefacciones.php">Consultar Refacciones</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">A&ntilde;os</button>
				<div class="dropdown-content">
					<a href="../BackEnd/Anios/Form_anio.html">Insertar a&ntilde;o</a>
					<a href="../BackEnd/Anios/consultasAnio.php">Consultar a&ntilde;os</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Catalogos</button>
				<div class="dropdown-content">
					<a href="../BackEnd/Catalogos/Form_Catalogo.php">Insertar Catalago</a>
					<a href="../BackEnd/Catalogos/consultasCatalogo.php">Consultar Catalagos</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Categorias</button>
				<div class="dropdown-content">
					<a href="../BackEnd/Categorias/Form_categoria.php">Insertar categoria</a>
					<a href="../BackEnd/Categorias/consutasCategoria.php">Consultar categorias</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Modelos</button>
				<div class="dropdown-content">
					<a href="../BackEnd/Modelos/Form_modelo.php">Insertar modelo</a>
					<a href="../BackEnd/Modelos/consultasModelo.php">Consultar modelos</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Proveedores</button>
				<div class="dropdown-content">
					<a href="../BackEnd/Proveedores/Form_Proveedor.php">Insertar proveedor</a>
					<a href="../BackEnd/Proveedores/consultasProveedor.php">Consultar proveedores</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Subcategorias</button>
				<div class="dropdown-content">
					<a href="../BackEnd/SubCategoria/Form_SubCat.php">Insertar subcategor&iacute;a</a>
					<a href="../BackEnd/SubCategoria/consultasSubCat.php">Consultar subcategor&iacute;as</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Vehiculos</button>
				<div class="dropdown-content">
					<a href="../BackEnd/Vehiculos/Form_Vehiculo.php">Insertar veh&iacute;culo</a>
					<a href="../BackEnd/Vehiculos/consultasVehiculo.php">Consultar veh&iacute;culos</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Operaciones</button>
				<div class="dropdown-content">
					<a href="../BackEnd/Devoluciones/Form_Devolucion.php">Registrar devoluciones</a>
					<a href="../BackEnd/Devoluciones/consultasDevolucion.php">Consultar devoluciones</a>
					<a href="../BackEnd/Entradas/Form_Entrada.php">Registrar entrada</a>
					<a href="../BackEnd/Entradas/consultasEntrada.php">Consultar entradas</a>
					<a href="../BackEnd/Salidas/Form_Salidas.php">Registrar salida</a>
					<a href="../BackEnd/Salidas/consultasSalida.php">Consultar salidas</a>
				</div>
			</div>
	    </ul>
	</nav>
	
	
	
	
	
	
	
	
	<div >
		<div class="container" > 
			<ul class="two-rows">
				</ul>
	  		
				<h1>Bienvendio Administrador...</h1>	
				<hr>
				<ul class="two-rows" class="fondo123">
				
				</ul>
		<section>
		
		  
    </section>

</body>
			<footer class="foot-page">
	<div class="container">
			<ul class="horizontal">
				<li style="font-size:22px">Síguenos a través de las redes sociales:&nbsp;&nbsp;&nbsp; </li>
				<li><a href="https://www.facebook.com/CAJC3"><img src="./Sinaloense_files/fb_icon.png" alt=""></a></li>
				<li><a href="https://twitter.com/"><img src="./Sinaloense_files/twitter_icon.png" alt=""></a></li>
				
			</ul>
			<br>
		</div>
</footer>
</html>