<?php 
	require_once ("conexion.php");
	$salida="";
	$query="SELECT * FROM personas";
	if (isset($_POST['consulta'])) {
		$palabra=$conexion->real_escape_string($_POST['consulta']);
		$query="SELECT * FROM personas WHERE Nombre LIKE '".$palabra."%'";
	}
	$resultado=$conexion->query($query);
	if ($resultado->num_rows > 0) {
		$salida.="
			<table class='table table-sm table-hover'>
		        <thead>
		            <tr class='bg-info text-white font-weight-bold'>
		                <th class='text-center'><small>ID</small></th>
		                <th class='text-center'><small>Nombre</small></th>
		                <th class='text-center'><small>CI</small></th>
		                <th class='text-center'><small>Sexo</small></th>
		                <th class='text-center'><small>Fecha de Inscripción</small></th>
		                <th class='text-center'><small>Dirección</small></th>
		                <th class='text-center'><small>Teléfono</small></th>
						
		            </tr>
		        </thead>
		        <tbody>";
		  while ($fila=$resultado->fetch_assoc()) {
		  	$salida.="
		        <tr class='text-center'>
		        	<td><small>".$fila['Id_persona']."</small></td>
					<td><small>".$fila['Nombre']."</small></td>
					<td><small>".$fila['CI']."</small></td>
					<td><small>".$fila['Sexo']."</small></td>
					<td><small>".$fila['Fecha_inscripcion']."</small></td>
					<td><small>".$fila['Direccion']."</small></td>
					<td><small>".$fila['Telefono']."</small></td>
		        </tr>";
		  }
		  $salida.="
		  		</tbody>
		  	</table>
		  ";
	}else{
		$salida.="No se econtraron datos :(";
	}
	echo $salida;
	$conexion->close();
?>