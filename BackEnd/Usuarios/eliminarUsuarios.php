<?php
	ECHO "Modulo eliminar<BR>";
	$id_usuario=$_GET['id_usuario'];
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
		ECHO "Ejecutando consulta <BR>";
		//$query="DELETE FROM Usuarios WHERE id_usuario= ".$id_usuario."";
		//2.2 Ejecutar la consulta
		//ECHO $query. "<BR>";
		//$resultados=sqlsrv_query($conexion, $query);
		
		$parametros = array(
			array(&$id_usuario)
			);
		$resultados = sqlsrv_query($conexion,"exec spEliminarUsuario @id = ?",$parametros);
		

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
			HEADER("Location: consultarUsuario.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
	} else {
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
	}
?>