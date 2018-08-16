<?php
	ECHO "Modulo eliminar<BR>";
	$folio_salida=$_GET['folio_salida'];
	
	ECHO "folio_salida a eliminar: ".$folio_salida."</BR>";
	
	
	include("../conexion.php");
	$bandera_conexion = true;
	
	if ($conexion){
		$param=array(
			array(&$folio_salida)
		);
		$resultados=sqlsrv_query($conexion, "exec spEliminarSalida @folio=?",$param);
		
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
			header("Location: consultasSalida.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
		$banderaconexion= false;
	}

?>