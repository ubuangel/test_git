<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_libro.php');
	require_once('libro.php');
	$crud= new CrudLibro();
	$libro=new Libro();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerLibro($_GET['nombre']);
?>
<html>
<head>
	<title>Actualizar Libro</title>
</head>
<body>
	<form action='administrar_libro.php' method='post'>
	<table>
		e' value='<?php echo $libro->getAutor()?>' ></td>
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
</html>
