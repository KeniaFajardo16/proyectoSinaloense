<?php
	ECHO "Modulo eliminar<BR>";
	$folio_refaccion=$_GET['folio_refaccion'];
	//ECHO "IdBeca a eliminar: ".$IdBeca."</BR>";
	//Paso 1. onectarnos a la BD
	//1.1 Datos de la conexión
	include("../conexion.php");
	
	//1.3 Bandera que monitorea la conexión
	$banderaconexion = true;
	if ($conexion){
		 ECHO "Conexión exitosa (:<BR>";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	
	//Consulta
	if ($banderaconexion==true){
		$param=array(
			array(&$folio_refaccion)
		);
		$resultados=sqlsrv_query($conexion, "exec spEliminarRefaccion @id=?",$param);
		
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
			HEADER("Location: consultasRefacciones.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
	} else {
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
	}
?>