<?php
$contraseña = "n0m3l0";
$usuario = "root";
$nombre_base_de_datos = "reportes";
$nombre_base_de_datos2 = "FAQ";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	
	$base_de_datos2 = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos2, $usuario, $contraseña);
	 $base_de_datos2->query("set names utf8;");
    $base_de_datos2->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos2->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>
