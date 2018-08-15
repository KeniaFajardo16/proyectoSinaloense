<HTML>
	<HEAD>
		<TITLE> consultas </TITLE>
	</HEAD>
	<BODY>
		<H1> C O N S U L T A S    A L M A C E N E S </H1>
	
		<?PHP
			$servername = "localhost";
			$username = "root";
			$password = "usbw";
			$database = "proyectosinaloense";
			
			$conexion = mysqli_connect($servername, $username, $password, $database);
			$bandera_conexion = true;
			
			if ($conexion) {//si hubo conexion
				ECHO "Conexion Exitosa <BR>";
				ECHO "Ejecutando consulta <BR>";
				//2.1 Estableciendo la consulta a ejecutará
				$query="SELECT * FROM Almacenes";
				//2.2 Ejecutar la consulta
				ECHO $query. "<BR>";
				$resultado = mysqli_query($conexion, $query);
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
					$num_filas = mysqli_num_rows($resultado);
					ECHO "Imprimiendo ".$num_filas." Resultados <BR>";
					
				}else{
					ECHO "No se imprimiran resultados :( <BR>";
				}
			}else{
				ECHO "Conexion Fallida :S <BR>";
				ECHO "No se ejecutará la consulta por falla en conexión <BR>";
				$banderaconexion = false;
			}

			ECHO "<H1> Lista de registros </H1>";
			//3. Imprimiendo registros
			ECHO "<TABLE BORDER =1 frame=below>";
				ECHO "<TH> id_almacen </TH>";
				ECHO "<TH> nombre_almacen </TH>";
				ECHO "<TH> ciudad_almacen </TH>";
				ECHO "<TH> Modificar </th>";
				ECHO "<TH> Eliminar </th>";
				
				//3.1 Implementando el ciclo for 
				
				while ($i=$row=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
					//3.2 Atrapar los indices
					$id_almacen = $row['id_almacen'];
					$nombre_almacen = $row ['nombre_almacen'];
					$ciudad_almacen = $row ['ciudad_almacen'];
					
					//3.3 Imprimir resutados
					ECHO "<TR>";
						ECHO "<TD>".$id_almacen."</TD>";
						ECHO "<TD>".$nombre_almacen."</TD>";
						ECHO "<TD>".$ciudad_almacen."</TD>";
						ECHO "<TD> <a href='form_modif.php?id_almacen=".$id_almacen ."&nombre_almacen=".$nombre_almacen."&ciudad_almacen=".$ciudad_almacen."'>Modificar </a></td>";
						echo "<TD> <a href='eliminarAlmacen.php?id_almacen=".$id_almacen."'>Eliminar </a></td>";
					ECHO "</TR>";
				}
					
			ECHO "</TABLE>";
		?>

	</BODY>
</HTML>