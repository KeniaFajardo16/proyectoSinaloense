<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_categoria= $_POST["id_categoria"];
	$nombre_categoria= $_POST["nombre_categoria"];

	include("../conexion.php");
	$banderaconexion = true;
	
	
	if ($conexion){//si hubo conexión
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconexion == true){
		$param=array(
			array(&$id_categoria),
			array(&$nombre_categoria)
		);
		$resultado=sqlsrv_query($conexion,"exec spModificarCategoria @id=?, @categoria=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consutasCategoria.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>