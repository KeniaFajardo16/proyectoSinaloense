<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$folio_refaccion = $_POST["folio_refaccion"];
	$descripcion_refaccion = $_POST["descripcion_refaccion"];
	$existencia_refaccion = $_POST["existencia_refaccion"];
	$catalogo_refaccion = $_POST["catalogo_refaccion"];
	$proveedor_refaccion = $_POST["proveedor_refaccion"];
	
	
	//ECHO "Hemos enviado un mensaje a tu correo ".$correo."</BR>";
	
	include ("../conexion.php");
	
	//1.3 Bandera que monitorea la conexión
	$banderaconexion = true;
	if ($conexion){//si hubo conexión
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconexion == true){
		ECHO "Ejecutando consulta </br>";
		$param = array(
			array(&$descripcion_refaccion),
			array(&$existencia_refaccion),
			array(&$catalogo_refaccion),
			array(&$proveedor_refaccion),
			array(&$folio_refaccion)
		);

		$resultado=sqlsrv_query($conexion,"exec spModificarRefaccion @descripcion=?,@existencias=?,@catalogo=?,@proveedor=?,@id=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consultasRefacciones.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>