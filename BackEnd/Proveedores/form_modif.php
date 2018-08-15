<?php 
	header("Content-Type: text/html;charset=iso-8859-1");
	$id_proveedor =  $_GET['id_proveedor'];
	$rfc_proveedor = $_GET['rfc_proveedor'];
	$nombre_proveedor = $_GET['nombre_proveedor'];
	$ciudad_proveedor = $_GET['ciudad_proveedor'];
	$telefono_proveedor= $_GET['telefono_proveedor'];
	$cp_proveedor = $_GET['cp_proveedor'];

?>

<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	    <!--GENERA TODO EL CSS PARA QUE TOME FORMA Y NO SOLO SEA HTML-->
		<link rel="stylesheet" type="text/css" href="../Sinaloense_files/STB.css">
		<!-- GENERA UN BOTON CUANDO LA PANTALLA SE HACE MAS PEQUEÑA Y MUESTRA LA BARRA PRINCIPAL-->
		<link href="../Sinaloense_files/css.css" rel="stylesheet" type="text/css">
		<script src="../Sinaloense_files/jquery-latest.js.descarga"></script>
	    <script src="../Sinaloense_files/main.js.descarga"></script>

</head>
	<body>
	<header class="h-body_bajo">
		<div class="logo"><img src="../Sinaloense_files/logo.png"></div>
		
		<div class="menu_bar">
				<a class="bt-menu"><img src="../Sinaloense_files/circular-menu-button.png"></a>
				
	</div>
	</header>
	<nav>
		<ul>
	        <li><a href="../../FrontEnd/login_pass.php"><span class="icon-earth"></span>Inicio</a></li>   <!-- pagina del index-->
		    <div class="dropdown">
				<button class="dropbtn">Usuarios</button>
				<div class="dropdown-content">
					<a href="../Usuarios/form_usuarios.php">Registrar Usuario</a>
					<a href="../Usuarios/consultarUsuario.php">Consultar Usuarios</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Marcas</button>
				<div class="dropdown-content">
					<a href="../Marcas/form_marca.php">Insertar Marca</a>
					<a href="../Marcas/consultMarcas.php">Consultar Marcas</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Refacciones</button>
				<div class="dropdown-content">
					<a href="../Refacciones/form_refacciones.php">Insertar Refaccion</a>
					<a href="../Refacciones/consultasRefacciones.php">Consultar Refacciones</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">A&ntilde;os</button>
				<div class="dropdown-content">
					<a href="../Anios/Form_anio.php">Insertar a&ntilde;o</a>
					<a href="../Anios/consultasAnio.php">Consultar a&ntilde;os</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Catalogos</button>
				<div class="dropdown-content">
					<a href="../Catalogos/Form_Catalogo.php">Insertar Catalago</a>
					<a href="../Catalogos/consultasCatalogo.php">Consultar Catalagos</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Categorias</button>
				<div class="dropdown-content">
					<a href="../Categorias/Form_categoria.php">Insertar categoria</a>
					<a href="../Categorias/consutasCategoria.php">Consultar categorias</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Modelos</button>
				<div class="dropdown-content">
					<a href="../Modelos/Form_modelo.php">Insertar modelo</a>
					<a href="../Modelos/consultasModelo.php">Consultar modelos</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Proveedores</button>
				<div class="dropdown-content">
					<a href="../Proveedores/Form_Proveedor.php">Insertar proveedor</a>
					<a href="../Proveedores/consultasProveedor.php">Consultar proveedores</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Subcategorias</button>
				<div class="dropdown-content">
					<a href="../SubCategoria/Form_SubCat.php">Insertar subcategor&iacute;a</a>
					<a href="../SubCategoria/consultasSubCat.php">Consultar subcategor&iacute;as</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Vehiculos</button>
				<div class="dropdown-content">
					<a href="../Vehiculos/Form_Vehiculo.php">Insertar veh&iacute;culo</a>
					<a href="../Vehiculos/consultasVehiculo.php">Consultar veh&iacute;culos</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Operaciones</button>
				<div class="dropdown-content">
					<a href="../Devoluciones/Form_Devolucion.php">Registrar devoluciones</a>
					<a href="../Devoluciones/consultasDevolucion.php">Consultar devoluciones</a>
					<a href="../Entradas/Form_Entrada.php">Registrar entrada</a>
					<a href="../Entradas/consultasEntrada.php">Consultar entradas</a>
					<a href="../Salidas/Form_Salidas.php">Registrar salida</a>
					<a href="../Salidas/consultasSalida.php">Consultar salidas</a>
				</div>
			</div>
	    </ul>
	</nav>
	
	<div class="fondo123">
		<div class="container"> 
			<ul class="two-rows">
			
			</ul>
			<H1>Actualizar informaci&oacute;n</H1>
			<form action = "modificarProveedor.php" METHOD="POST" class="formulario">
				<!--Cajas de texto !-->
				<input TYPE ="hidden" NAME = "id_proveedor" 
				value = <?php echo "".$id_proveedor."" ?> 
				/>
				</br>
					
				<label>RFC de Proveedor </label>
				<input TYPE ="TEXT" NAME = "rfc_proveedor" 
				value = <?php 
				echo "".$rfc_proveedor."" ?> />
				</br>
				
				<label>Nombre de Proveedor</label>
				<input TYPE ="TEXT" NAME = "nombre_proveedor" 
				value = <?php 
				echo "'".$nombre_proveedor."'" ?> />
				</br>
				
				<label>Ciudad de Proveedor</label>
				<SELECT NAME="ciudad_proveedor">
					<?php
						header("Content-Type: text/html;charset=iso-8859-1");
						include("../conexion.php");
						if ($conexion)
						{
							$resultado = sqlsrv_query($conexion,"exec spSeleccionarCiudad");
							if ($resultado){
								while($row = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC))
								{
									$id_ciudad = $row['id_ciudad'];
									$ciudad = $row ['nombre_ciudad'];
									if($ciudad==$ciudad_proveedor){
										echo "<option value='".$id_ciudad."' selected>".$ciudad."</option><br>";
									}
									else{
										echo "<option value='".$id_ciudad."'>".$ciudad."</option><br>";
									}
								}
							}
						}
					?>
				</SELECT>
				</br>
				
				<label>Telefono de Proveedor</label>
				<input TYPE ="TEXT" NAME = "telefono_proveedor" 
				value = <?php 
				echo "".$telefono_proveedor.""; ?> />
				</br>
				
				<label>CP de Proveedor</label>
				<input TYPE ="TEXT" NAME = "cp_proveedor" 
				value = <?php 
				echo "".$cp_proveedor."" ?> />
				</br>
					
				<!--Boton de envio !-->
				<input type = "SUBMIT" VALUE = "Modificar" />
		</form>
			
		  	
		</div> 
	</div>
	<footer class="h-body_bajo">
		<div class="container">
			<ul class="horizontal">
				<li style="font-size:22px">Síguenos a través de las redes sociales:&nbsp;&nbsp;&nbsp; </li>
				<li><a href="https://www.facebook.com/CAJC3"><img src="../Sinaloense_files/fb_icon.png" alt=""></a></li>
				<li><a href="https://twitter.com/"><img src="../Sinaloense_files/twitter_icon.png" alt=""></a></li>
				
			</ul>
			<br>
			<br>
			<br>
			<br>
		</div>
	</footer>
	</body>
</html>