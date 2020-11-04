<?php 
include 'conexion.php';

//$codigo  = $_GET['concepto'];
$concepto  = $_GET['concepto'];
//$codigo  = "135"
//$json = array();
//$consulta = "select * from conceptos where conceptos =  '$codigo'";
$consulta = "select * from conceptos where concepto =  '$concepto'";
//$consulta = "select * from conceptos where ID = 76";

//& " FROM conceptos INNER JOIN definiciones ON conceptos.ID = definiciones.conceptoID" _
//& " where concepto =  '$codigo'"; 
//$busqueda= "SELECT * FROM tabla1 WHERE ID=135";
//$busqueda= mysql_query($conexion, "SELECT * FROM tabla1 WHERE ID=135");
//$busqueda= mysqli_query($conexion, "SELECT * FROM tabla1 WHERE ID=135");   //funciona
//$busqueda= mysqli_query($conexion, "SELECT * FROM tabla1 WHERE ID='$codigo');
//$busqueda= mysqli_query($conexion, "SELECT * FROM tabla1 WHERE ID=138");
//$busqueda= "SELECT * FROM Tabla1 WHERE ID=135"; 
//$query = mysqli_query($conexion, $busqueda);
//$consulta = "SELECT * FROM Tabla2 where ID =  200";
$resultado = $conexion -> query($consulta);
//$resultado = mysql_query($conexion, $busqueda);

//if  ($busqueda){
	//if(reg)
//}

while ($fila = $resultado-> fetch_array()){
	$tabla1[]= array_map('utf8_encode', $fila);
}
	echo json_encode($tabla1);
	$resultado -> close ();

 ?>
