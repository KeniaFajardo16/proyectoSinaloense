<?php
	ECHO "Modulo eliminar<BR>";
	$folio_devolucion=$_GET['folio_devolucion'];
	
	ECHO "folio_devolucion a eliminar: ".$folio_devolucion."</BR>";
	
	
	include("../conexion.php");
	$banderaconexion = true;
	
	if ($conexion){
		$param=array(
			array(&$folio_devolucion)
		);
		$resultados=sqlsrv_query($conexion, "exec spEliminarDevolucion @folio=?",$param);
		
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
			header("Location: consultasDevolucion.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
		$banderaconexion= false;
	}

?>