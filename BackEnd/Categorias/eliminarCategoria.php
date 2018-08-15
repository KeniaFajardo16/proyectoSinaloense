<?php
	ECHO "Modulo eliminar<BR>";
	$id_categoria=$_GET['id_categoria'];
	
	ECHO "id_categoria a eliminar: ".$id_categoria."</BR>";
	
	
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
		$param=array(
			array(&$id_categoria)
		);
		$resultados=sqlsrv_query($conexion, "exec spEliminarCategoria @id=?",$param);
		
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
			HEADER("Location: consutasCategoria.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
	} else {
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
	}
?>