<?php 
	include('inc/conexion.php');

	$sql='UPDATE personas SET ' 
	."paterno='{$_POST['text-paterno']}', "
	."materno='{$_POST['text-materno']}', "
	."nombres='{$_POST['text-nombres']}' "
	."WHERE persona_id={$_POST['text-id']}";
	//echo $sql;
	$resultado=$conexion->query($sql);
	if($resultado)
	{
		header('Location: 20-09-2016.php');
	}
	else
	{
		header("Location:nuevo.php");
	}
 
 ?>