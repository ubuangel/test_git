<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_libro.php');
	require_once('libro.php');
<<<<<<< HEAD
	$cruud= new CrudLibro();
	aa$libro=new Libro();
=======
	$cruuud= new CrudLibro();
	$libro=new Libro();
>>>>>>> 1835ad2f694d9f34468e7b05f6c53fec6b41f571
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
</html>
