<?php 
	require_once ("conexion.php");
	$salida="";
	$query="SELECT libros.*, autores.Nombre  FROM libros, autores WHERE libros.Id_autor=autores.Id_autor AND libros.activo =1 AND autores.Activo=1 ORDER BY libros.Titulo";
	if (isset($_POST['consulta'])) {
		$texto=$conexion->real_escape_string($_POST['consulta']);
		$query="SELECT libros.*, autores.Nombre FROM libros, autores WHERE libros.Id_autor=autores.Id_autor AND libros.activo =1 AND autores.Activo=1 AND libros.Titulo LIKE '".$texto."%'";
	}
	$resultado=$conexion->query($query);
	if ($resultado->num_rows > 0) {
		$salida.="
			<table class='table table-sm table-hover'>
		        <thead>
		            <tr class='bg-info text-white font-weight-bold'>
					<th class='text-center'><small>id</small></th>
					<th class='text-center'><small>Clasificación</small></th>
					<th class='text-center'><small>Autor</small></th>
					<th class='text-center'><small>Título</small></th>
					<th class='text-center'><small>Edición</small></th>
					<th class='text-center'><small>Editorial</small></th>
					<th class='text-center'><small>Año</small></th>
					<th class='text-center'><small>Lugar</small></th>
					<th class='text-center'><small>Páginas</small></th>
					<th class='text-center'><small>Materia</small></th>
		            </tr>
		        </thead>
		        <tbody>";
		  while ($fila=$resultado->fetch_assoc()) {
		  	$salida.="
		        
		        <tr class='text-center'>
		        	<td><small>".$fila['Id_libro']."</small></td>
					<td><small>".$fila['Clasificacion']."</small></td>
					<td><small>".$fila['Nombre']."</small></td>
					<td><small>".$fila['Titulo']."</small></td>
					<td><small>".$fila['Edicion']."</small></td>
					<td><small>".$fila['Editorial']."</small></td>
					<td><small>".$fila['Anno']."</small></td>
					<td><small>".$fila['Lugar']."</small></td>
					<td><small>".$fila['Cant_pag']."</small></td>
					<td><small>".$fila['Materia']."</small></td>
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