<?php
 require 'conexion.php';

//$host = "https://dbprueba123.000webhostapp.com";
//$user = "root";
//$clave = "";
//$bd  = "id14955011_nombres";
//$user = "id14955011_user";
//$clave = "cXn9V#NnuV+9Mf7i";
//$bd  = "id14955011_nombres";
//$conectar = mysqli_connect($host,$user,$clave,$bd);


 $codigo  = $_POST['codigo'];
// $definicion  = $_POST['definicion'];
//$apellido  = $_POST['apellido'];
// Validamos si hay resultados
//$consulta = "SELECT * FROM tabla1 where codigo= $codigo";
//$ejecutarConsulta = mysqli_query($conectar, $consulta);
//$nuevo_usuario=mysql_query("SELECT * FROM Tabla1");
//if(mysql_num_rows($nuevo_usuario)>0){
//$sql="INSERT into tbl4_img_cliente (id_iTipDocIdent
//$result=mysqli_query($conexion,$sql);
			//return mysqli_insert_id($conexion);
//$verFilas = mysqli_num_rows($ejecutarConsulta);
//echo "$verFilas"
//$verFilas = mysqli_result($ejecutarConsulta);
//$busqueda= mysql_query("SELECT * FROM tabla1 WHERE nombre='$nombre'");
/*$mysqli = new mysqli("localhost", "my_user", "my_password", "world");
/* verificar la conexión */
//if (mysqli_connect_error()) {
 
	//if ($result = $ejecutarConsulta) {
	//$row_cnt = $result-> num_rows;
 	//printf("Resultado %d filas.\n", $row_cnt);
	//}
	 
 // $busqueda= mysqli_query($conexion, "SELECT * FROM Tabla1 WHERE codigo='$codigo'"); 
 $busqueda= mysqli_query($conexion, "SELECT * FROM Tabla2 WHERE codigo='$codigo'"); 
    if(mysqli_num_rows($busqueda)>0) {
    	echo "Ya existe el registro que intenta registrar";
    }else{

			$insertar = "INSERT INTO Tabla2(codigo)VALUES ('$codigo')";
			$query = mysqli_query($conexion, $insertar);
			if ($query) {
				// Imprimimos que se ingreso correctamente
			echo "Nuevo Registro Creado Exitosamente.";
			}
			}
 
 
//echo "Error: " . $consulta . "" . mysqli_error($con);
//  echo "El nombre de usuario no se encuentra disponible. Por favor intente con otro.<br>"; 
//  echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
//} else { // fin de mi consulta
//if(mysqli_num_rows($ejecutarConsulta)>0){
 
// Si no hay resultados, ingresamos el registro a la base de datos
//echo "Registo correctamente";
// Cerramos la conexión

//$query = mysqli_query($conectar, $insertar);
//$consulta = "SELECT * FROM tabla1";
//$ejecutarConsulta = mysqli_query($conectar, $consulta);
//$verFilas = mysqli_num_rows($ejecutarConsulta);

	include 'Consulta2.php'

?>

