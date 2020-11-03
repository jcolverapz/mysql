
<?php
 include 'conexion.php';

$codigo  = $_POST['codigo'];
//$definicion  = $_POST['definicion'];
	$insertar = "INSERT INTO Tabla2(codigo) VALUES ('$codigo')";
	//$insertar = "INSERT INTO conceptos(concepto) VALUES ('$codigo')";
	$query = mysqli_query($conexion, $insertar);

mysqli_close($conexion);
//include 'Consulta2.php'
?>
 