<body>
	<form action='administrar_libro.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $libro->getNombre()?>'>
			<td>Nombre libro:</td>
			<td> <input type='text' name='nombre' value='<?php echo $libro->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Autor:</td>
			<td><input type='text' name='nombre' value='<?php echo $libro->getAutor()?>' ></td>
		</tr>
		<tr>
			<td>Fecha Edición:</td>
			<td><input type='text' name='nombmbre' value='<?php echo $libro->getAnio_edicion() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>