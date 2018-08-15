<?php
	ECHO "Modulo eliminar<BR>";
	$id_proveedor=$_GET['id_proveedor'];
	
	ECHO "id_proveedor a eliminar: ".$id_proveedor."</BR>";
	
	
	include("../conexion.php");
	$banderaconexion = true;
	
	if ($conexion){
		$param=array(
			array(&$id_proveedor)
		);
		$resultados=sqlsrv_query($conexion, "spEliminarProveedor @id=?",$param);
		
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
			header("Location: consultasProveedor.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
		$banderaconexion= false;
	}

?>