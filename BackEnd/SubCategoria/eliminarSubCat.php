<?php
	ECHO "Modulo eliminar<BR>";
	$id_subcategoria=$_GET['id_subcategoria'];
	
	ECHO "id_subcategoria a eliminar: ".$id_subcategoria."</BR>";
	
	
	include("../conexion.php");
	$banderaconexion = true;
	
	if ($conexion){
		$param=array(
			array(&$id_subcategoria)
		);
		$resultados=sqlsrv_query($conexion, "exec spEliminarSubcategoria @id=?",$param);
		
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
			header("Location: consultasSubCat.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
		$banderaconexion= false;
	}

?>