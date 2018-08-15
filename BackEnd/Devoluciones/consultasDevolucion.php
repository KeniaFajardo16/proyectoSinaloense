<HTML>
	<HEAD>
		<TITLE> consultas </TITLE>
	</HEAD>
	<BODY>
		<H1> C O N S U L T A S    D E V O L U C I O N </H1>
	
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
				$query="SELECT * FROM Devoluciones";
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
				ECHO "<TH> folio_devolucion </TH>";
				ECHO "<TH> fecha_devolucion </TH>";
				ECHO "<TH> salida_devolucion </TH>";
				ECHO "<TH> almacen_devolucion </TH>";
				ECHO "<TH> observacion_devolucion </TH>";
				ECHO "<TH> Modificar </th>";
				ECHO "<TH> Eliminar </th>";
				
				//3.1 Implementando el ciclo for 
				
				while ($i=$row=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
					//3.2 Atrapar los indices
					$folio_devolucion = $row['folio_devolucion'];
					$fecha_devolucion = $row ['fecha_devolucion'];
					$salida_devolucion = $row ['salida_devolucion'];
					$almacen_devolucion = $row ['almacen_devolucion'];
					$observacion_devolucion = $row ['observacion_devolucion'];
					
					//3.3 Imprimir resutados
					ECHO "<TR>";
						ECHO "<TD>".$folio_devolucion."</TD>";
						ECHO "<TD>".$fecha_devolucion."</TD>";
						ECHO "<TD>".$salida_devolucion."</TD>";
						ECHO "<TD>".$almacen_devolucion."</TD>";
						ECHO "<TD>".$observacion_devolucion."</TD>";
						ECHO "<TD> <a href='form_modif.php?folio_devolucion=".$folio_devolucion ."&fecha_devolucion=".$fecha_devolucion."&salida_devolucion=".$salida_devolucion."&almacen_devolucion=".$almacen_devolucion."&observacion_devolucion=".$observacion_devolucion."'>Modificar </a></td>";
						echo "<TD> <a href='eliminarDevolucion.php?folio_devolucion=".$folio_devolucion."'>Eliminar </a></td>";
					ECHO "</TR>";
				}
					
			ECHO "</TABLE>";
		?>

	</BODY>
</HTML>