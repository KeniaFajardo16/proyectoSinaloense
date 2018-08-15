<html lang="es">
	<head>
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
						"zeroRecords": "Nada por aquí :(",
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
					<a href="../Categorias/consutasCategoria.phpp">Consultar categorias</a>
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
			<div style="display: none">
			<H1> C O N S U L T A S    M A R C A S </H1>
	
			<?PHP
			include("../conexion.php");
			$banderaconexion = true;
			
			if ($conexion) {//si hubo conexion
				ECHO "Conexion Exitosa <BR>";
			}else{
				ECHO "Conexion Fallida :S <BR>";
				$banderaconexion = false;
			}
			
			//2. CONSULTA		
			if($banderaconexion==true){
				
				echo "Ejecutando consulta <br>";
            

				$resultados=sqlsrv_query($conexion,"exec spSeleccionarAnio");
				
            
            //validar la ejecucion
				$banderaconsulta=true;
				
				if($resultados){
					echo "consulta ejecutada con exito<br>";
				}else{
					echo"consulta fallida<br>";
					$banderaconsultada=false;
				}
				if($banderaconsulta==true){
					//estableciendo el limite del arreglo, delimitandolo por 
				}
				else{
					echo"no se imprimiran resultados</br>";
				}
			}else{
				echo"no se ejecutara la conexion por falla de conexion <br>";
			}
			ECHO "<H1> Lista de registros </H1>";
			//3. Imprimiendo registros
			ECHO "</div>";
			ECHO "<TABLE BORDER=1 frame=below id='tabla'>";
				ECHO "<THEAD>";
				ECHO "<TH hidden> Id Anio </TH>";
				ECHO "<TH> Descripcion </TH>";
				ECHO "<TH> Modificar </th>";
				ECHO "<TH> Eliminar </th>";
				ECHO "</THEAD>";
				
				//3.1 Implementando el ciclo for 
				ECHO "<TBODY>";
				while ($row=sqlsrv_fetch_array($resultados, SQLSRV_FETCH_ASSOC)){
					//3.2 Atrapar los indices
					$id_anio = $row['id_anio'];
					$descripcion_anio = $row ['descripcion_anio'];
					//3.3 Imprimir resutados
					ECHO "<TR>";
						ECHO "<TD hidden>".$id_anio."</TD>";
						ECHO "<TD>".$descripcion_anio."</TD>";
						ECHO "<TD> <a href='form_modif.php?id_anio=".$id_anio ."&descripcion_anio=".$descripcion_anio."'><img src='../Sinaloense_files/modificar.png' alt='Modificar registro'></a></td>";
						echo "<TD> <a href='eliminarAnio.php?id_anio=".$id_anio."'><img src='../Sinaloense_files/eliminar.png' alt='Modificar registro'></a></td>";
					ECHO "</TR>";
				}
				ECHO "</TBODY>";
					
			ECHO "</TABLE>";
		?>
		<br>
		<br>
		<br>
		<a href="Form_anio.php">Insertar nuevo registro</a>
		  	
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