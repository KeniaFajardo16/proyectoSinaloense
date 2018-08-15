<?PHP
	$nombre_subcategoria = $_POST["nombre_subcategoria"];
	$categoria_subcategoria = $_POST["categoria_subcategoria"];
		
	include("../conexion.php");
	$banderaconexion = true;
				
	if ($conexion) {//si hubo conexion
		ECHO "Conexion Exitosa *u* <BR>";
	}else{
		ECHO "Conexion Fallida :S <BR>";
		$banderaconexion = false;
	}
	$banderaconsulta=true;
	if($banderaconsulta==true){
		ECHO "Ejecutanco Consulta </br>";
			
		$param=array(
			array(&$nombre_subcategoria),
			array(&$categoria_subcategoria)
		);
		$resultado1= sqlsrv_query($conexion,"exec spInsertarSubcategoria @subcategoria=?, @categoria=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Location: consultasSubCat.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>