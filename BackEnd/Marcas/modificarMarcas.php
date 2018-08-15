<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_marca= $_POST["id_marca"];
	$nombre_marca= $_POST["nombre_marca"];
	
	ECHO "El Id de la marca es: ".$id_marca."</BR>";
	ECHO "El nombre de la marca es: ".$nombre_marca."</BR>";
	
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
		//INSERT INTO empleados_planta (Id_Empleado, Nombre_Empleado, Apellido_Empleado, Edad_Empleado, Bono) VALUES (NULL, 'Luis', 'Mejía', '20', '2500');
		
		$param = array(
			array(&$id_marca),
			array(&$nombre_marca)
		);
		$resultado=sqlsrv_query($conexion,"exec spModificarMarca @idmarca=?, @nombremarca=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consultMarcas.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>