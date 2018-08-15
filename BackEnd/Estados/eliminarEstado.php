<?php
	ECHO "Modulo eliminar<BR>";
	$id_estado=$_GET['id_estado'];
	
	ECHO "id_estado a eliminar: ".$id_estado."</BR>";
	
	
	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$database = "proyectosinaloense";
	
	$conexion = mysqli_connect($servername, $username, $password, $database);
	$bandera_conexion = true;
	
	if ($conexion){
		 ECHO "Conexión exitosa (:<BR>";
		 ECHO "Ejecutando consulta <BR>";
		$query="DELETE FROM Estados WHERE id_estado= ".$id_estado."";
		//2.2 Ejecutar la consulta
		ECHO $query. "<BR>";
		$resultados=mysqli_query($conexion, $query);
		
		//2.3 Validar la ejecución
		$banderaconsulta= true;
		if($resultados){
			ECHO"Consulta ejecutada con éxito. <BR>";
		}else {
			ECHO "Consulta fallida :c <BR>";
			$banderaconsulta=false;
		}
		
		if($banderaconsulta==true){
			ECHO "Refrescando página post-eliminación <BR>";
			header("Refresh:5 url=http://localhost:8080/ProyectoSinoaloense/Estados/consultasEstado.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
		$banderaconexion= false;
	}

?>