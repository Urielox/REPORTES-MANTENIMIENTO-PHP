<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo reporte</h1>
	<form method="post" action="nuevo.php">
		<label for="codigo">Titulo:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

		<label for="descripcion">Descripción del problema:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>

		<label for="precioVenta">Programador encargado:</label>
		<input class="form-control" name="precioVenta" required type="text" id="precioVenta" placeholder="Precio de venta">
		
		<label for="existencia">Nivel de prioridad:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">

		<label for="precioCompra">Fecha de creacion:</label>
		<input class="form-control" name="precioCompra" required type="text" id="precioCompra" placeholder="Precio de compra">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>