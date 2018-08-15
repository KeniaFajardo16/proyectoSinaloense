<?php
	ECHO "Modulo eliminar<BR>";
	$id_anio=$_GET['id_anio'];
	ECHO "IdBeca a eliminar: ".$id_anio."</BR>";
	
	
	include("../conexion.php");
	$banderaconexion = true;
	
	if ($conexion){
		 ECHO "Conexión exitosa (:<BR>";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	
	//Consulta
	if ($banderaconexion==true){
		ECHO "Ejecutando consulta <BR>";
		
		$param = array(
			array(&$id_anio)
		);

		$resultados=sqlsrv_query($conexion, "exec spEliminarAnio @id=?",$param);
		
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
			HEADER("Location: consultasAnio.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
	} else {
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
	}
?>