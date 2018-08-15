<?PHP
	$descripcion_refaccion = $_POST["descripcion_refaccion"];
	$existencia_refaccion = $_POST["existencia_refaccion"];
	$catalogo_refaccion = $_POST["catalogo_refaccion"];
	$proveedor_refaccion = $_POST["proveedor_refaccion"];
		
	include ("../conexion.php");
					

	$banderaconexion = true;
				
	if ($conexion) {//si hubo conexion
		ECHO "Conexion Exitosa *u* <BR>";
	}else{
		ECHO "Conexion Fallida :S <BR>";
		$banderaconexion = false;
	}

	$banderaconsulta=true;
	if($banderaconexion==true){
		ECHO "Ejecutanco Consulta </br>";
		
		$param = array(
			array(&$descripcion_refaccion),
			array(&$existencia_refaccion),
			array(&$catalogo_refaccion),
			array(&$proveedor_refaccion)
		);
		
		$resultado1= sqlsrv_query($conexion,"exec spInsertarRefaccion @descripcion=?,@existencias=?,@catalogo=?,@proveedor=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			//redireccion a la pagina de consulta
			header("Location: consultasRefacciones.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
?>