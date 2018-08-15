<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_catalogo = $_POST["id_catalogo"];
	$vehiculo_catalogo = $_POST["vehiculo_catalogo"];
	$subcategoria_catalogo = $_POST["subcategoria_catalogo"];

	
	include("../conexion.php");
	$banderaconexion = true;
	
	
	if ($conexion){//si hubo conexión
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconsulta == true){
		$param=array(
			array(&$id_catalogo),
			array(&$vehiculo_catalogo),
			array(&$subcategoria_catalogo)
		);

		$resultado=sqlsrv_query($conexion,"exec spModificarCatalogo @id=?,@vehiculo=?,@subcategoria=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consultasCatalogo.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>