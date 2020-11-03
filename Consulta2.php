<?php
//$con = new mysqli('localhost', 'id14955011_user', 'cXn9V#NnuV+9Mf7i', 'id14955011_nombres');
 include 'conexion.php';	
$datos = $conexion -> query ("SELECT * FROM tabla1");				
?>

<table border="1px">
	<thead>
		<th>id</th>
		<th>Nombre</th>
	</thead>
	<tbody>
		<?php while ($user = mysqli_fetch_array($datos)) { ?>
			<tr>	
				<td><?php echo $user['ID']; ?></td>
				<td><?php echo $user['codigo']; ?></td>
				 
			</tr>
		<?php } ?>
	</tbody>
</table>