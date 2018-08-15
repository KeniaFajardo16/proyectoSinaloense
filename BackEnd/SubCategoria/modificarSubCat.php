<?PHP
	$id_subcategoria = $_POST['id_subcategoria'];
	$nombre_subcategoria = $_POST['nombre_subcategoria'];
	$categoria_subcategoria= $_POST['categoria_subcategoria'];
	ECHO "<H1> Actualizando datos </BR></H1>";
	
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
			array(&$id_subcategoria),
			array(&$nombre_subcategoria),
			array(&$categoria_subcategoria)
		);
		$resultado=sqlsrv_query($conexion,"exec spModificarSubcategoria @id=?,@subcategoria=?,@categoria=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consultasSubCat.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>