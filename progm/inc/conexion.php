<?php
	$conexion = new mysqli("localhost","root","guzmanmita",'programacionweb');
		if($conexion->conect_errno){
			echo "Error al connectar a la BBDD".
				$conexion->connect_errno.",".
				$conexion->connect_error;
		exit();
		}else{
			$conexion->set_charset("utf8");
		}
?>
