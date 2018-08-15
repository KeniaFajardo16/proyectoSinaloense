<?php
	header("Content-Type: text/html;charset=iso-8859-1");
?>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<!--GENERA TODO EL CSS PARA QUE TOME FORMA Y NO SOLO SEA HTML-->
		<link rel="stylesheet" type="text/css" href="../Sinaloense_files/STB.css">
		<!-- GENERA UN BOTON CUANDO LA PANTALLA SE HACE MAS PEQUEÑA Y MUESTRA LA BARRA PRINCIPAL-->
		<link href="../Sinaloense_files/css.css" rel="stylesheet" type="text/css">
		<script src="../Sinaloense_files/jquery-latest.js.descarga"></script>
		<script src="../Sinaloense_files/main.js.descarga"></script>
		<link rel="stylesheet" type="text/css" href="../Sinaloense_files/datatables.min.css"/>
    	<script type="text/javascript" src="../Sinaloense_files/datatables.min.js"></script>
		<script>
			$(document).ready(function () {
    			$('#tabla').DataTable( {
					"language": {
						"lengthMenu": "Mostrando _MENU_ registros por pagina",
						"zeroRecords": "Nada por aqu&iacute; :(",
						"info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(Filtrados de _MAX_ registros totales)",
						"search": "Buscar: ",
						"paginate" : {
							"previous": "Anterior",
							"next": "Siguiente"
						}
					}
    			} );
			} );
		</script>
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
				<ul class="two-rows"></ul>
				<div style="display:none">
					<H1> C O N S U L T A S   R E F A C C I O N E S </H1>

					<?PHP
						include ("../conexion.php");	
						$banderaconexion = true;
						
						if ($conexion) {//si hubo conexion
							ECHO "Conexion Exitosa <BR>";
						}else{
							ECHO "Conexion Fallida :S <BR>";
							$banderaconexion = false;
						}
						
						//2. CONSULTA
						if ($banderaconexion == true){
							ECHO "Ejecutando consulta <BR>";
							//2.1 Estableciendo la consulta a ejecutará
							
							$resultado = sqlsrv_query($conexion, "exec spSeleccionarRefaccion");
							//2.3 VALIDAR LA EJECUCIÓN
							$banderaconsulta = true;
							if ($resultado){
								ECHO "Consulta ejecutada con exito <BR>";
							}else{
								ECHO "Consulta fallida :S <BR>";
								$banderaconsulta = false;
							}
							if ($banderaconsulta ==true){
								//2.4 Estableciendo el límite del arreglo delimitando por el número de filas
								$num_filas = sqlsrv_num_rows($resultado);
								ECHO "Imprimiendo ".$num_filas." Resultados <BR>";
								
							}else{
								ECHO "No se imprimiran resultados :( <BR>";
							}
						}else{
							ECHO "No se ejecutará la consulta por falla en conexión <BR>";
						}
						ECHO "<H1> Lista de registros </H1>";
						//3. Imprimiendo registros
						ECHO "</div>";
						ECHO "<TABLE BORDER='1' id='tabla'>";
							ECHO "<THEAD>";
								ECHO "<TH hidden> Folio </TH>";
								ECHO "<TH> Descripci&oacute;n </TH>";
								ECHO "<TH> Existencias </TH>";
								ECHO "<TH> Catalago </TH>";
								ECHO "<TH> Proveedor </TH>";
								ECHO "<TH> Modificar </th>";
								ECHO "<TH> Eliminar </th>";
							ECHO "</THEAD>";
							
							//3.1 Implementando el ciclo for 
							ECHO "<TBODY>";
								while ($row=sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)){
									//3.2 Atrapar los indices
									$folio_refaccion= $row['folio_refaccion'];
									$descripcion_refaccion = $row ['descripcion_refaccion'];
									$existencia_refaccion= $row['existencias_refaccion'];
									$nombre_subcategoria = $row['nombre_subcategoria'];
									$descripcion_modelo = $row['descripcion_modelo'];
									$anio_vehiculo = $row['anio_vehiculo'];
									$proveedor_refaccion= $row['nombre_proveedor'];
									
									//3.3 Imprimir resutados
									ECHO "<TR>";
										ECHO "<TD hidden>".$folio_refaccion."</TD>";
										ECHO "<TD>".$descripcion_refaccion."</TD>";
										ECHO "<TD>".$existencia_refaccion." unidades </TD>";
										ECHO "<TD>".$nombre_subcategoria." para ".$descripcion_modelo." ".$anio_vehiculo."</TD>";
										ECHO "<TD>".$proveedor_refaccion."</TD>";
										ECHO "<TD> <a href='formRefacciones.php?folio_refaccion=".$folio_refaccion ."'><img src='../Sinaloense_files/modificar.png' alt='Modificar registro'></a></td>";
										echo "<TD> <a href='eliminarRefacciones.php?folio_refaccion=".$folio_refaccion."'><img src='../Sinaloense_files/Eliminar.png' alt='Eliminar registro'></a></td>";
									ECHO "</TR>";
								}
							ECHO "</TBODY>";
								
						ECHO "</TABLE>";
					?>
				<br>
				<br>
				<br>
				<a href="form_refacciones.php">Insertar nuevo registro</a>
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